<?php

if(!function_exists('scrapInfo'))
{
  function scrapInfo($url,$namepath,$pricepath)
  {
    //$url='http://www.alfaonline.com/samsung-galaxy-j5-8gb-putih-22232.html';
    $doc = new DOMDocument();
    // set error level
    $internalErrors = libxml_use_internal_errors(true);

    $doc->loadHTMLFile($url);

    // Restore error level
    libxml_use_internal_errors($internalErrors);
    $xpath = new DOMXpath($doc);
    $result=array();
    $name = $xpath->query($namepath);
    if (!is_null($name)) {
    $result['name'] = $name[0]->nodeValue;
    }

    $price = $xpath->query($pricepath);
    if (!is_null($price)) {
    $str = $price[0]->nodeValue;
    $result['price']= filter_var($str, FILTER_SANITIZE_NUMBER_INT);
    }

    return $result;
  }
}

if(!function_exists('getDashboard'))
{
  function getDashboard($value)
  {
   switch ($value) {
    case "Agent":
        return "home_view";
        break;
    case "Super Admin":
        return "home_branch_admin_view";
        break;
    case "Branch Admin":
        return "home_branch_admin_view";
        break;
    default:
        echo "role_is_not_recognized";
}
  }
}


if(!function_exists('time_since'))
{
function time_since($since) {
    $chunks = array(
        array(60 * 60 * 24 * 365 , 'year'),
        array(60 * 60 * 24 * 30 , 'month'),
        array(60 * 60 * 24 * 7, 'week'),
        array(60 * 60 * 24 , 'day'),
        array(60 * 60 , 'hour'),
        array(60 , 'minute'),
        array(1 , 'second')
    );

    for ($i = 0, $j = count($chunks); $i < $j; $i++) {
        $seconds = $chunks[$i][0];
        $name = $chunks[$i][1];
        if (($count = floor($since / $seconds)) != 0) {
            break;
        }
    }

    $print = ($count == 1) ? '1 '.$name : "$count {$name}s";
    return $print;
}
}
