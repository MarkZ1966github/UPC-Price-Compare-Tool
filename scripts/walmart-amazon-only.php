<?php
    if(isset($_POST['walmart'], $_POST['amazon'])) {

   // Defining the basic cURL function
require_once 'scripts/scrape.php';
require 'scripts/repeat-walmart-amazon.php';
    echo "<br>";
    echo "<strong>SEARCH RESULTS:</strong><br><br>";
    echo "<table class='upctable'>";
    echo "<tr>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>UPC</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Image</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Item Name</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Walmart Price</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Amazon Price</th>";
    echo "</tr>";
        echo "<tr>";
        echo "<td align='center'>". $upc ."</td>";
        if (!empty($imagew)){
                 echo "<td align='center'><img src =" . $imagew. "></td>";   
        }elseif (empty($imagew)){
            echo "<td align='center'><img src =" . $imagea . "></td>";
        }elseif(empty($imagea)){
                     echo "<td align='center'><strong>No image found</strong></td>";   
        }

        if(!empty($item_namew)){
        echo "<td align='center'>" . $item_namew . "</td>";    
        }elseif (empty($item_namew)){
            echo "<td align='center'>" . $item_namea . "</td>";
        }elseif ((empty($item_namea)) && (empty($item_namew))){
 		echo "<td align='center'><strong>No item name found</strong></td>";
        }
        if(!empty($pricew)){
            echo "<td align='center'>" . $pricew . "</td>";
        }else{
            echo "<td align='center'><strong>No Walmart price found</strong></td>";
        }

        if(!empty($pricea)){
            echo "<td align='center'>" . $pricea . "</td>";
        }else{
          echo "<td align='center'><strong>No Amazon price found</strong></td>";  
        }

    echo "</table><br>";
    
    }
?>