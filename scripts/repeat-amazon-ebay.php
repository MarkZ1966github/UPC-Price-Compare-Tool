<?php
set_time_limit(0);
curl_setopt($ch, CURLOPT_TIMEOUT, 400);
$scraped_pagea = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_pagea
$item_namea = scrape_between($scraped_pagea, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
   $pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags 
    }
}
$imagea = scrape_between($scraped_pagea, "<img alt=\"Product Details\" src=\"", "\"");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
    if(empty($pricea)){
time_nanosleep(0, 100000000);
$scraped_pagea = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_pagea
$item_namea = scrape_between($scraped_pagea, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
   $pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags 
    }
}
$imagea = scrape_between($scraped_pagea, "<img alt=\"Product Details\" src=\"", "\"");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
    if(empty($pricea)){
time_nanosleep(0, 100000000);
$scraped_pagea = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_pagea
$item_namea = scrape_between($scraped_pagea, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
   $pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags 
    }
}
$imagea = scrape_between($scraped_pagea, "<img alt=\"Product Details\" src=\"", "\"");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
    }
    if(empty($pricea)){
time_nanosleep(0, 100000000);
$scraped_pagea = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_pagea
$item_namea = scrape_between($scraped_pagea, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
   $pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags 
    }
}
$imagea = scrape_between($scraped_pagea, "<img alt=\"Product Details\" src=\"", "\"");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
    }
    if(empty($pricea)){
time_nanosleep(0, 100000000);
$scraped_pagea = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_pagea
$item_namea = scrape_between($scraped_pagea, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
   $pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags 
    }
}
$imagea = scrape_between($scraped_pagea, "<img alt=\"Product Details\" src=\"", "\"");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
    }
        if(empty($pricea)){
time_nanosleep(0, 100000000);
$scraped_pagea = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_pagea
$item_namea = scrape_between($scraped_pagea, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
   $pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags 
    }
}
$imagea = scrape_between($scraped_pagea, "<img alt=\"Product Details\" src=\"", "\"");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
    }
    if(empty($pricea)){
time_nanosleep(0, 100000000);
$scraped_pagea = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_pagea
$item_namea = scrape_between($scraped_pagea, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
   $pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags 
    }
}
$imagea = scrape_between($scraped_pagea, "<img alt=\"Product Details\" src=\"", "\"");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
    }
        if(empty($pricea)){
time_nanosleep(0, 100000000);
$scraped_pagea = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_pagea
$item_namea = scrape_between($scraped_pagea, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
   $pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags 
    }
}
$imagea = scrape_between($scraped_pagea, "<img alt=\"Product Details\" src=\"", "\"");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
    }
        if(empty($pricea)){
time_nanosleep(0, 100000000);
$scraped_pagea = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_pagea
$item_namea = scrape_between($scraped_pagea, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
   $pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags 
    }
}
$imagea = scrape_between($scraped_pagea, "<img alt=\"Product Details\" src=\"", "\"");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
    }
    if(empty($pricea)){
time_nanosleep(0, 100000000);
$scraped_pagea = curl("http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$upc");    // Downloading page to variable $scraped_pagea
$item_namea = scrape_between($scraped_pagea, "<h2 class=\"a-size-medium a-color-null s-inline s-access-title a-text-normal\">", "</h2></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price s-price a-text-bold\">", "</span></a>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
$pricea = scrape_between($scraped_pagea, "<span class=\"a-size-small a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
if(empty($pricea)){
   $pricea = scrape_between($scraped_pagea, "<span class=\"a-size-base a-color-price a-text-bold\">", "</span>");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags 
    }
}
$imagea = scrape_between($scraped_pagea, "<img alt=\"Product Details\" src=\"", "\"");   // Scraping downloaded data in $scraped_pagea for content between <..> and <..> tags
    }
}

$scraped_pagee = curl("http://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&_nkw=$upc&_rdc=1");  
$item_nameetempe = scrape_between($scraped_pagee, "<h3 class=\"lvtitle\">", "</h3>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$item_namee = scrape_between($item_nameetempe, "\">", "</a>");
$priceetempe = scrape_between($scraped_pagee, "<li class=\"lvprice prc\">", "<div class=\"cmpat\">");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$pricee = scrape_between($priceetempe, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
if(empty($pricee)){
$priceetempe = scrape_between($scraped_pagee, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$pricee = scrape_between($priceetempe, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
}
if(empty($pricee)){
$priceetempe = scrape_between($scraped_pagee, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$pricee = scrape_between($priceetempe, "<div class=\"stk-thr\">", "</div>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
}
$imageetempe = scrape_between($scraped_pagee, "<div class=\"lvpicinner full-width picW\">", "</div>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$imagee = scrape_between($imageetempe, "src=\"", "\"");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags

    if(empty($pricee)){
time_nanosleep(0, 100000000);
$scraped_pagee = curl("http://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&_nkw=$upc&_rdc=1");  
$item_nameetempe = scrape_between($scraped_pagee, "<h3 class=\"lvtitle\">", "</h3>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$item_namee = scrape_between($item_nameetempe, "\">", "</a>");
$priceetempe = scrape_between($scraped_pagee, "<li class=\"lvprice prc\">", "<div class=\"cmpat\">");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$pricee = scrape_between($priceetempe, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
if(empty($pricee)){
$priceetempe = scrape_between($scraped_pagee, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$pricee = scrape_between($priceetempe, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
}
if(empty($pricee)){
$priceetempe = scrape_between($scraped_pagee, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$pricee = scrape_between($priceetempe, "<div class=\"stk-thr\">", "</div>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
}
$imageetempe = scrape_between($scraped_pagee, "<div class=\"lvpicinner full-width picW\">", "</div>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$imagee = scrape_between($imageetempe, "src=\"", "\"");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
    }

    if(empty($pricee)){
time_nanosleep(0, 100000000);
$scraped_pagee = curl("http://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&_nkw=$upc&_rdc=1");  
$item_nameetempe = scrape_between($scraped_pagee, "<h3 class=\"lvtitle\">", "</h3>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$item_namee = scrape_between($item_nameetempe, "\">", "</a>");
$priceetempe = scrape_between($scraped_pagee, "<li class=\"lvprice prc\">", "<div class=\"cmpat\">");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$pricee = scrape_between($priceetempe, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
if(empty($pricee)){
$priceetempe = scrape_between($scraped_pagee, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$pricee = scrape_between($priceetempe, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
}
if(empty($pricee)){
$priceetempe = scrape_between($scraped_pagee, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$pricee = scrape_between($priceetempe, "<div class=\"stk-thr\">", "</div>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
}
$imageetempe = scrape_between($scraped_pagee, "<div class=\"lvpicinner full-width picW\">", "</div>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$imagee = scrape_between($imageetempe, "src=\"", "\"");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
    }

        if(empty($pricee)){
time_nanosleep(0, 100000000);
$scraped_pagee = curl("http://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&_nkw=$upc&_rdc=1");  
$item_nameetempe = scrape_between($scraped_pagee, "<h3 class=\"lvtitle\">", "</h3>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$item_namee = scrape_between($item_nameetempe, "\">", "</a>");
$priceetempe = scrape_between($scraped_pagee, "<li class=\"lvprice prc\">", "<div class=\"cmpat\">");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$pricee = scrape_between($priceetempe, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
if(empty($pricee)){
$priceetempe = scrape_between($scraped_pagee, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$pricee = scrape_between($priceetempe, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
}
if(empty($pricee)){
$priceetempe = scrape_between($scraped_pagee, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$pricee = scrape_between($priceetempe, "<div class=\"stk-thr\">", "</div>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
}
$imageetempe = scrape_between($scraped_pagee, "<div class=\"lvpicinner full-width picW\">", "</div>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$imagee = scrape_between($imageetempe, "src=\"", "\"");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
    }

        if(empty($pricee)){
time_nanosleep(0, 100000000);
$scraped_pagee = curl("http://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&_nkw=$upc&_rdc=1");  
$item_nameetempe = scrape_between($scraped_pagee, "<h3 class=\"lvtitle\">", "</h3>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$item_namee = scrape_between($item_nameetempe, "\">", "</a>");
$priceetempe = scrape_between($scraped_pagee, "<li class=\"lvprice prc\">", "<div class=\"cmpat\">");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$pricee = scrape_between($priceetempe, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
if(empty($pricee)){
$priceetempe = scrape_between($scraped_pagee, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$pricee = scrape_between($priceetempe, "<span  class=\"bold\">", "</span>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
}
if(empty($pricee)){
$priceetempe = scrape_between($scraped_pagee, "<li class=\"lvprice prc\">", "</li>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
$pricee = scrape_between($priceetempe, "<div class=\"stk-thr\">", "</div>");   // Scraping downloaded data in $scraped_page for content between <..> and <..> tags
}
$imageetempe = scrape_between($scraped_pagee, "<div class=\"lvpicinner full-width picW\">", "</div>");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
$imagee = scrape_between($imageetempe, "src=\"", "\"");   // Scraping downloaded data in $scraped_pagee for content between <..> and <..> tags
    }
?>