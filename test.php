<!doctype html>
<html>

<head>
    <title>Bar Chart</title>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.bundle.min.js"></script>
    <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>
</head>

<body>
    <div id="container" style="width: 75%;">
        <canvas id="canvas"></canvas>
    </div>
    <script>
    var data = {
        labels: ["Link Collected", "Product Page", "Product"],
        datasets: [
            {
                label: "Lazada",
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1,
                data: [65, 59, 80],
            }
        ]
    };
        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar= new Chart(ctx, {
                  type: 'horizontalBar',
                  data: data
              });
        };
    </script>
</body>

</html>
