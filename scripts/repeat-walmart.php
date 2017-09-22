<?php
set_time_limit(0);
curl_setopt($ch, CURLOPT_TIMEOUT, 400);
$scraped_page = curl("http://www.walmart.com/search/?query=$upc");    // Downloading page to variable $scraped_page
$item_nametemp = scrape_between($scraped_page, "<div class=tile-content>", "</h4>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$item_name = scrape_between($item_nametemp, "\">", "</a>");
$price = scrape_between($scraped_page, "<span class=\"price price-display\">", "<span class=price-auxblock>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = str_replace("<span class=sup>", "", $price);
$price = str_replace("<span class=currency-delimiter>", "", $price);
$price = str_replace("</span>", "", $price);
$price = trim($price);
$image = scrape_between($scraped_page, "<img class=product-image alt=\"\" data-default-image=\"", "\" src=\"");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
    time_nanosleep(0, 100000000);
    $scraped_page = curl("http://www.walmart.com/search/?query=$upc");    // Downloading page to variable $scraped_page
    $item_nametemp = scrape_between($scraped_page, "<div class=tile-content>", "</h4>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$item_name = scrape_between($item_nametemp, "\">", "</a>");
$price = scrape_between($scraped_page, "<span class=\"price price-display\">", "<span class=price-auxblock>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = str_replace("<span class=sup>", "", $price);
$price = str_replace("<span class=currency-delimiter>", "", $price);
$price = str_replace("</span>", "", $price);
$price = trim($price);
    if(empty($price)){
    time_nanosleep(0, 100000000);
    $scraped_page = curl("http://www.walmart.com/search/?query=$upc");    // Downloading page to variable $scraped_page
   $item_nametemp = scrape_between($scraped_page, "<div class=tile-content>", "</h4>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$item_name = scrape_between($item_nametemp, "\">", "</a>");
$price = scrape_between($scraped_page, "<span class=\"price price-display\">", "<span class=price-auxblock>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = str_replace("<span class=sup>", "", $price);
$price = str_replace("<span class=currency-delimiter>", "", $price);
$price = str_replace("</span>", "", $price);
$price = trim($price);
    }
    if(empty($price)){
    time_nanosleep(0, 100000000);
    $scraped_page = curl("http://www.walmart.com/search/?query=$upc");    // Downloading page to variable $scraped_page
    $item_nametemp = scrape_between($scraped_page, "<div class=tile-content>", "</h4>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$item_name = scrape_between($item_nametemp, "\">", "</a>");
$price = scrape_between($scraped_page, "<span class=\"price price-display\">", "<span class=price-auxblock>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = str_replace("<span class=sup>", "", $price);
$price = str_replace("<span class=currency-delimiter>", "", $price);
$price = str_replace("</span>", "", $price);
$price = trim($price);
    }
    if(empty($price)){
    time_nanosleep(0, 100000000);
    $scraped_page = curl("http://www.walmart.com/search/?query=$upc");    // Downloading page to variable $scraped_page
    $item_nametemp = scrape_between($scraped_page, "<div class=tile-content>", "</h4>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$item_name = scrape_between($item_nametemp, "\">", "</a>");
$price = scrape_between($scraped_page, "<span class=\"price price-display\">", "<span class=price-auxblock>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = str_replace("<span class=sup>", "", $price);
$price = str_replace("<span class=currency-delimiter>", "", $price);
$price = str_replace("</span>", "", $price);
$price = trim($price);
    }
        if(empty($price)){
    time_nanosleep(0, 100000000);
    $scraped_page = curl("http://www.walmart.com/search/?query=$upc");    // Downloading page to variable $scraped_page
   $item_nametemp = scrape_between($scraped_page, "<div class=tile-content>", "</h4>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$item_name = scrape_between($item_nametemp, "\">", "</a>");
$price = scrape_between($scraped_page, "<span class=\"price price-display\">", "<span class=price-auxblock>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = str_replace("<span class=sup>", "", $price);
$price = str_replace("<span class=currency-delimiter>", "", $price);
$price = str_replace("</span>", "", $price);
$price = trim($price);
    }
    if(empty($price)){
    time_nanosleep(0, 100000000);
    $scraped_page = curl("http://www.walmart.com/search/?query=$upc");    // Downloading page to variable $scraped_page
    $item_nametemp = scrape_between($scraped_page, "<div class=tile-content>", "</h4>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$item_name = scrape_between($item_nametemp, "\">", "</a>");
$price = scrape_between($scraped_page, "<span class=\"price price-display\">", "<span class=price-auxblock>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = str_replace("<span class=sup>", "", $price);
$price = str_replace("<span class=currency-delimiter>", "", $price);
$price = str_replace("</span>", "", $price);
$price = trim($price);
    }
    if(empty($price)){
    time_nanosleep(0, 100000000);
    $scraped_page = curl("http://www.walmart.com/search/?query=$upc");    // Downloading page to variable $scraped_page
    $item_nametemp = scrape_between($scraped_page, "<div class=tile-content>", "</h4>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$item_name = scrape_between($item_nametemp, "\">", "</a>");
$price = scrape_between($scraped_page, "<span class=\"price price-display\">", "<span class=price-auxblock>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = str_replace("<span class=sup>", "", $price);
$price = str_replace("<span class=currency-delimiter>", "", $price);
$price = str_replace("</span>", "", $price);
$price = trim($price);
    }
        if(empty($price)){
    time_nanosleep(0, 100000000);
    $scraped_page = curl("http://www.walmart.com/search/?query=$upc");    // Downloading page to variable $scraped_page
    $item_nametemp = scrape_between($scraped_page, "<div class=tile-content>", "</h4>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$item_name = scrape_between($item_nametemp, "\">", "</a>");
$price = scrape_between($scraped_page, "<span class=\"price price-display\">", "<span class=price-auxblock>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = str_replace("<span class=sup>", "", $price);
$price = str_replace("<span class=currency-delimiter>", "", $price);
$price = str_replace("</span>", "", $price);
$price = trim($price);
    }
    if(empty($price)){
    time_nanosleep(0, 100000000);
    $scraped_page = curl("http://www.walmart.com/search/?query=$upc");    // Downloading page to variable $scraped_page
   $item_nametemp = scrape_between($scraped_page, "<div class=tile-content>", "</h4>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$item_name = scrape_between($item_nametemp, "\">", "</a>");
$price = scrape_between($scraped_page, "<span class=\"price price-display\">", "<span class=price-auxblock>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = str_replace("<span class=sup>", "", $price);
$price = str_replace("<span class=currency-delimiter>", "", $price);
$price = str_replace("</span>", "", $price);
$price = trim($price);
    }
}
?>