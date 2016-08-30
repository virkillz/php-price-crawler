# php-price-crawler
codeigniter based price crawler using Xpath to crawl ecommerce data.

The ideas for user is:
1. Entry new website
2. Give example url containing product detail consist of name of product and price.
3. Give xpath location for price and name
4. Give starter url to crawl.
5. (optional) give regex formula to match product url (to speedup crawling, only check for product page only based on regex match)
6. Get data grow for link and product price summary.

Behind the scene:
We need to put 2 url in cronjob.
1st script is collecting the URL
2nd script is trying to extract data from those URL.

In the end of the day you got bunch of price data.

Prequisite:
1. PHP 5.2 and above
2. Apache or nginx
3. MySQL


How to install:
1. Dump database.sql
2. Edit application/config/config.php change the base url to your own.
3. Modify database credential in application/config/database.php

That's for now.
