<?php
/** This section is for the single item UPC lookup **/
if(isset($_POST['upc'])) {
$upc = $_POST["upc"];
if (isset($_POST['walmart'], $_POST['amazon'])){
        require_once 'scripts/walmart-amazon-only.php';
        die();
       } 
       if (isset($_POST['walmart'], $_POST['ebay'])){
        require_once 'scripts/walmart-ebay-only.php';
        die();
       }
    if (isset($_POST['amazon'], $_POST['ebay'])){
        require_once 'scripts/amazon-ebay-only.php';
        die();
       }
   if (isset($_POST['amazon'])){
// New Amazon 4-7-15
   // Defining the basic cURL function
require_once 'scripts/scrape.php';
require 'scripts/repeat-amazon.php';
    echo "<br>";
    echo "<strong>SEARCH RESULTS:</strong><br><br>";
    echo "<table class='upctable'>";
    echo "<tr>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>UPC</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Image</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Item Name</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Amazon Price</th>";
    echo "</tr>";
        echo "<tr>";
        echo "<td align='center'>". $upc ."</td>";
        
        if(!empty($image)){
        echo "<td align='center'><img src =" . $image . "></td>"; 
                    }else{
                        echo "<td align='center'><strong>No image found</strong></td>";
                    }
        if(empty($item_name)){
            echo "<td align='center'><strong>No item name found</strong></td>";
                    }else{
                        echo "<td align='center'>" . $item_name . "</td>";
                    }
        if(empty($price)){
            echo "<td align='center'><strong>No Amazon price found</strong></td>";
        }else{
            echo "<td align='center'>" . $price . "</td>";
        }
    echo "</table><br>";
    }

    /* below is the import.io code for Amazon

    if (isset($_POST['amazon'])){
// New Amazon 4-7-15
   // Defining the basic cURL function
require_once 'scripts/importio.php';
$userGuid = '90090709-f853-47b6-a094-90134c9f54ed';
$apiKey = '90134c9f54ed:faTVMAM6d+6IS3n4tseX69eOJSzaMCkY1DZagb41GxRwfbnxNDxqZ4iu+Zu/+yuzrPJIAGgvlDz253s1m/hjHQ==';
// Query for tile Amazon UPC Search
 $result2 = query("c2bfa975-49dc-4337-89e2-14d545f1e439", array(
  "upc" => $upc,
), $userGuid, $apiKey, false); 
    echo "<br>";
    echo "<strong>SEARCH RESULTS:</strong><br><br>";
    echo "<table class='upctable'>";
    echo "<tr>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>UPC</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Image</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Item Name</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Amazon Price</th>";
    echo "</tr>";
        echo "<tr>";
        echo "<td align='center'>". $upc ."</td>";
        
        if(!empty($image)){
        echo "<td align='center'><img src =" . $result2->$results[0]->$image . "></td>"; 
                    }else{
                        echo "<td align='center'><strong>No image found</strong></td>";
                    }
        if(empty($item_name)){
            echo "<td align='center'><strong>No item name found</strong></td>";
                    }else{
                        echo "<td align='center'>" . $result2->$results[0]->$item_name . "</td>";
                    }
        if(empty($price)){
            echo "<td align='center'><strong>No Amazon price found</strong></td>";
        }else{
            echo "<td align='center'>" . $result2->$results[0]->$price . "</td>";
        }
    echo "</table><br>";
    }
    */
        if (isset($_POST['walmart'])){

require_once 'scripts/scrape.php';
require 'scripts/repeat-walmart.php';
    echo "<br>";
    echo "<strong>SEARCH RESULTS:</strong><br><br>";
    echo "<table class='upctable'>";
    echo "<tr>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>UPC</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Image</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Item Name</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Walmart Price</th>";
    echo "</tr>";
        echo "<tr>";
        echo "<td align='center'>". $upc ."</td>";
        
        if(!empty($image)){
        echo "<td align='center'><img src =" . $image . "></td>"; 
                    }else{
                        echo "<td align='center'><strong>No image found</strong></td>";
                    }
        if(empty($item_name)){
            echo "<td align='center'><strong>No item name found</strong></td>";
                    }else{
                        echo "<td align='center'>" . $item_name . "</td>";
                    }
        if(empty($price)){
            echo "<td align='center'><strong>No Walmart price found</strong></td>";
        }else{
            echo "<td align='center'>" . $price . "</td>";
        }
    echo "</table><br>";
    }

            if (isset($_POST['ebay'])){

require_once 'scripts/scrape.php';
require 'scripts/repeat-ebay.php';
    echo "<br>";
    echo "<strong>SEARCH RESULTS:</strong><br><br>";
    echo "<table class='upctable'>";
    echo "<tr>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>UPC</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Image</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Item Name</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Best eBay Price</th>";
    echo "</tr>";
        echo "<tr>";
        echo "<td align='center'>". $upc ."</td>";
        
        if(!empty($image)){
        echo "<td align='center'><img src =" . $image . "></td>"; 
                    }else{
                        echo "<td align='center'><strong>No image found</strong></td>";
                    }
        if(empty($item_name)){
            echo "<td align='center'><strong>No item name found</strong></td>";
                    }else{
                        echo "<td align='center'>" . $item_name . "</td>";
                    }
        if(empty($price)){
            echo "<td align='center'><strong>No eBay price found</strong></td>";
        }else{
            echo "<td align='center'>" . $price . "</td>";
        }
    echo "</table><br>";
    }
    if(isset($_POST['all'])) {

   // Defining the basic cURL function
require_once 'scripts/scrape.php';
require 'scripts/repeat-all.php';
    echo "<br>";
    echo "<strong>SEARCH RESULTS:</strong><br><br>";
    echo "<table class='upctable'>";
    echo "<tr>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>UPC</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Image</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Item Name</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Walmart Price</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Amazon Price</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Best eBay Price</th>";
    echo "</tr>";
        echo "<tr>";
        echo "<td align='center'>". $upc ."</td>";
        if (!empty($imagew)){
                 echo "<td align='center'><img src =" . $imagew. "></td>";   
        }elseif (empty($imagew)){
            echo "<td align='center'><img src =" . $imagea . "></td>";
        }elseif(empty($imagea)){
            echo "<td align='center'><img src =" . $imagee. "></td>";
         }elseif(empty($imagee)){
            echo "<td align='center'><strong>No image found</strong></td>";
            }
        if(!empty($item_namew)){
        echo "<td align='center'>" . $item_namew. "</td>";    
        }elseif (empty($item_namew)){
            echo "<td align='center'>" . $item_namee . "</td>";
        }elseif(empty($item_namee)){
            echo "<td align='center'>" . $item_namea. "</td>";
         }elseif(empty($item_namea)){
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

        if(!empty($pricee)){
            echo "<td align='center'>" . $pricee . "</td>";
        }else{
          echo "<td align='center'><strong>No Best eBay price found</strong></td>";  
        }

    echo "</table><br>";
    
    }

}     
       
?>
