<?php
    if(isset($_POST['walmart'], $_POST['ebay'])) {

   // Defining the basic cURL function
require_once 'scripts/scrape.php';
require 'scripts/repeat-walmart-ebay.php';
    echo "<br>";
    echo "<strong>SEARCH RESULTS:</strong><br><br>";
    echo "<table class='upctable'>";
    echo "<tr>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>UPC</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Image</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Item Name</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Walmart Price</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Best eBay Price</th>";
    echo "</tr>";
        echo "<tr>";
        echo "<td align='center'>". $upc ."</td>";
        if (!empty($imagew)){
                 echo "<td align='center'><img src =" . $imagew. "></td>";   
        }elseif (empty($imagew)){
            echo "<td align='center'><img src =" . $imagee . "></td>";
        }elseif(empty($imagee)){
                     echo "<td align='center'><strong>No image found</strong></td>";   
        }

        if(!empty($item_namew)){
        echo "<td align='center'>" . $item_namew . "</td>";    
        }elseif (empty($item_namew)){
            echo "<td align='center'>" . $item_namee . "</td>";
        }elseif ((empty($item_namee)) && (empty($item_namew))){
 		echo "<td align='center'><strong>No item name found</strong></td>";
        }
        if(!empty($pricew)){
            echo "<td align='center'>" . $pricew . "</td>";
        }else{
            echo "<td align='center'><strong>No Walmart price found</strong></td>";
        }

        if(!empty($pricee)){
            echo "<td align='center'>" . $pricee . "</td>";
        }else{
          echo "<td align='center'><strong>No Best eBay price found</strong></td>";  
        }

    echo "</table><br>";
    
    }
?>