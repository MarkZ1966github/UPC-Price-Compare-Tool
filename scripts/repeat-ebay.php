<?php
set_time_limit(0);
curl_setopt($ch, CURLOPT_TIMEOUT, 400);
$scraped_page = curl("http://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&_nkw=$upc&_rdc=1");  
$item_nametemp = scrape_between($scraped_page, "<h3 class=\"lvtitle\">", "</h3>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$item_name = scrape_between($item_nametemp, "\">", "</a>");
$pricetemp = scrape_between($scraped_page, "<li class=\"lvprice prc\">", "<div class=\"cmpat\">");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($pricetemp, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$pricetemp = scrape_between($scraped_page, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($pricetemp, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
}
if(empty($price)){
$pricetemp = scrape_between($scraped_page, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($pricetemp, "<div class=\"stk-thr\">", "</div>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
}
$imagetemp = scrape_between($scraped_page, "<div class=\"lvpicinner full-width picW\">", "</div>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($imagetemp, "src=\"", "\"");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags

    if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&_nkw=$upc&_rdc=1");  
$item_nametemp = scrape_between($scraped_page, "<h3 class=\"lvtitle\">", "</h3>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$item_name = scrape_between($item_nametemp, "\">", "</a>");
$pricetemp = scrape_between($scraped_page, "<li class=\"lvprice prc\">", "<div class=\"cmpat\">");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($pricetemp, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$pricetemp = scrape_between($scraped_page, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($pricetemp, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
}
if(empty($price)){
$pricetemp = scrape_between($scraped_page, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($pricetemp, "<div class=\"stk-thr\">", "</div>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
}
$imagetemp = scrape_between($scraped_page, "<div class=\"lvpicinner full-width picW\">", "</div>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($imagetemp, "src=\"", "\"");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
    }

    if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&_nkw=$upc&_rdc=1");  
$item_nametemp = scrape_between($scraped_page, "<h3 class=\"lvtitle\">", "</h3>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$item_name = scrape_between($item_nametemp, "\">", "</a>");
$pricetemp = scrape_between($scraped_page, "<li class=\"lvprice prc\">", "<div class=\"cmpat\">");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($pricetemp, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$pricetemp = scrape_between($scraped_page, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($pricetemp, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
}
if(empty($price)){
$pricetemp = scrape_between($scraped_page, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($pricetemp, "<div class=\"stk-thr\">", "</div>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
}
$imagetemp = scrape_between($scraped_page, "<div class=\"lvpicinner full-width picW\">", "</div>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($imagetemp, "src=\"", "\"");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
    }

        if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&_nkw=$upc&_rdc=1");  
$item_nametemp = scrape_between($scraped_page, "<h3 class=\"lvtitle\">", "</h3>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$item_name = scrape_between($item_nametemp, "\">", "</a>");
$pricetemp = scrape_between($scraped_page, "<li class=\"lvprice prc\">", "<div class=\"cmpat\">");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($pricetemp, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$pricetemp = scrape_between($scraped_page, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($pricetemp, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
}
if(empty($price)){
$pricetemp = scrape_between($scraped_page, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($pricetemp, "<div class=\"stk-thr\">", "</div>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
}
$imagetemp = scrape_between($scraped_page, "<div class=\"lvpicinner full-width picW\">", "</div>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($imagetemp, "src=\"", "\"");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
    }

        if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&_nkw=$upc&_rdc=1");  
$item_nametemp = scrape_between($scraped_page, "<h3 class=\"lvtitle\">", "</h3>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$item_name = scrape_between($item_nametemp, "\">", "</a>");
$pricetemp = scrape_between($scraped_page, "<li class=\"lvprice prc\">", "<div class=\"cmpat\">");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($pricetemp, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$pricetemp = scrape_between($scraped_page, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($pricetemp, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
}
if(empty($price)){
$pricetemp = scrape_between($scraped_page, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($pricetemp, "<div class=\"stk-thr\">", "</div>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
}
$imagetemp = scrape_between($scraped_page, "<div class=\"lvpicinner full-width picW\">", "</div>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($imagetemp, "src=\"", "\"");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
    }
?>