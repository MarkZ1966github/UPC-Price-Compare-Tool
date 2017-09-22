<?php
set_time_limit(0);
curl_setopt($ch, CURLOPT_TIMEOUT, 400);
$scraped_page = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_page
$item_name = scrape_between($scraped_page, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$price = scrape_between($scraped_page, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
   $price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags 
    }
}
$image_temp = scrape_between($scraped_page, "<a class=\"", "</a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($image_temp, "<img src=\"", "\"");
   if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_page
$item_name = scrape_between($scraped_page, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$price = scrape_between($scraped_page, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
   $price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags 
    }
}
$image_temp = scrape_between($scraped_page, "<a class=\"", "</a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($image_temp, "<img src=\"", "\"");
    if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_page
$item_name = scrape_between($scraped_page, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$price = scrape_between($scraped_page, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
   $price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags 
    }
}
$image_temp = scrape_between($scraped_page, "<a class=\"", "</a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($image_temp, "<img src=\"", "\"");
    }
    if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_page
$item_name = scrape_between($scraped_page, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$price = scrape_between($scraped_page, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
   $price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags 
    }
}
$image_temp = scrape_between($scraped_page, "<a class=\"", "</a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($image_temp, "<img src=\"", "\"");
    }
    if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_page
$item_name = scrape_between($scraped_page, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$price = scrape_between($scraped_page, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
   $price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags 
    }
}
$image_temp = scrape_between($scraped_page, "<a class=\"", "</a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($image_temp, "<img src=\"", "\"");
    }
    if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_page
$item_name = scrape_between($scraped_page, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$price = scrape_between($scraped_page, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
   $price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags 
    }
}
$image_temp = scrape_between($scraped_page, "<a class=\"", "</a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($image_temp, "<img src=\"", "\"");
    }
    if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_page
$item_name = scrape_between($scraped_page, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$price = scrape_between($scraped_page, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
   $price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags 
    }
}
$image_temp = scrape_between($scraped_page, "<a class=\"", "</a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($image_temp, "<img src=\"", "\"");
    }
        if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_page
$item_name = scrape_between($scraped_page, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$price = scrape_between($scraped_page, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
   $price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags 
    }
}
$image_temp = scrape_between($scraped_page, "<a class=\"", "</a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($image_temp, "<img src=\"", "\"");
    }
    if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_page
$item_name = scrape_between($scraped_page, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$price = scrape_between($scraped_page, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
   $price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags 
    }
}
$image_temp = scrape_between($scraped_page, "<a class=\"", "</a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($image_temp, "<img src=\"", "\"");
    }
    if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_page
$item_name = scrape_between($scraped_page, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$price = scrape_between($scraped_page, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
   $price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags 
    }
}
$image_temp = scrape_between($scraped_page, "<a class=\"", "</a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($image_temp, "<img src=\"", "\"");
    }

        if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_page
$item_name = scrape_between($scraped_page, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$price = scrape_between($scraped_page, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
   $price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags 
    }
}
$image_temp = scrape_between($scraped_page, "<a class=\"", "</a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($image_temp, "<img src=\"", "\"");
    }

        if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_page
$item_name = scrape_between($scraped_page, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$price = scrape_between($scraped_page, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
   $price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags 
    }
}
$image_temp = scrape_between($scraped_page, "<a class=\"", "</a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($image_temp, "<img src=\"", "\"");
    }
            if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_page
$item_name = scrape_between($scraped_page, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$price = scrape_between($scraped_page, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
   $price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags 
    }
}
$image_temp = scrape_between($scraped_page, "<a class=\"", "</a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($image_temp, "<img src=\"", "\"");
    }
            if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_page
$item_name = scrape_between($scraped_page, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$price = scrape_between($scraped_page, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
   $price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags 
    }
}
$image_temp = scrape_between($scraped_page, "<a class=\"", "</a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($image_temp, "<img src=\"", "\"");
    }
            if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_page
$item_name = scrape_between($scraped_page, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$price = scrape_between($scraped_page, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
   $price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags 
    }
}
$image_temp = scrape_between($scraped_page, "<a class=\"", "</a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($image_temp, "<img src=\"", "\"");
    }
            if(empty($price)){
time_nanosleep(0, 100000000);
$scraped_page = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_page
$item_name = scrape_between($scraped_page, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
$price = scrape_between($scraped_page, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
if(empty($price)){
   $price = scrape_between($scraped_page, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags 
    }
}
$image_temp = scrape_between($scraped_page, "<a class=\"", "</a>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$image = scrape_between($image_temp, "<img src=\"", "\"");
    }
}
?>