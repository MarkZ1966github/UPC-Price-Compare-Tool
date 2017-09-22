<?php
    if(isset($_POST['amazon'], $_POST['ebay'])) {

   // Defining the basic cURL function
require_once 'scripts/scrape.php';
require 'scripts/repeat-amazon-ebay.php';
    echo "<br>";
    echo "<strong>SEARCH RESULTS:</strong><br><br>";
    echo "<table class='upctable'>";
    echo "<tr>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>UPC</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Image</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Item Name</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Amazon Price</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Best eBay Price</th>";
    echo "</tr>";
        echo "<tr>";
        echo "<td align='center'>". $upc ."</td>";
        if (!empty($imagea)){
                 echo "<td align='center'><img src =" . $imagea. "></td>";   
        }elseif (empty($imagea)){
            echo "<td align='center'><img src =" . $imagee . "></td>";
        }elseif(empty($imagee)){
                     echo "<td align='center'><strong>No image found</strong></td>";   
        }

        if(!empty($item_namea)){
        echo "<td align='center'>" . $item_namea . "</td>";    
        }elseif (empty($item_namea)){
            echo "<td align='center'>" . $item_namee . "</td>";
        }elseif ((empty($item_namee)) && (empty($item_namea))){
 		echo "<td align='center'><strong>No item name found</strong></td>";
        }
        if(!empty($pricea)){
            echo "<td align='center'>" . $pricea . "</td>";
        }else{
            echo "<td align='center'><strong>No Amazon price found</strong></td>";
        }

        if(!empty($pricee)){
            echo "<td align='center'>" . $pricee . "</td>";
        }else{
          echo "<td align='center'><strong>No Best eBay price found</strong></td>";  
        }

    echo "</table><br>";
    
    }
?>