<?php
/** This section is for the csv upload **/
if ( isset($_POST["submit"]) ) {
    //Open a new connection to the MySQL server
        if (isset($_POST['walmart'], $_POST['amazon'])){
        require_once 'scripts/walmart-amazon-only-upload.php';
        die();
       } 
        if (isset($_POST['walmart'], $_POST['ebay'])){
        require_once 'scripts/walmart-ebay-only-upload.php';
        die();
       } 
        if (isset($_POST['amazon'], $_POST['ebay'])){
        require_once 'scripts/amazon-ebay-only-upload.php';
        die();
       } 
require_once 'scripts/my.cnf.php';
$mysqli = new mysqli($host,$user,$pw,$db);

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
$clean = $mysqli->query('TRUNCATE TABLE  `upclookup`');

}

/** This section is for processing the csv upload **/
if(file_exists('upload/upc_file.csv')) {

//Open a new connection to the MySQL server
$mysqli = new mysqli($host,$user,$pw,$db);

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>
<style>
a:hover {
    background-color: #F2DE41;
color: #fff;
text-decoration: none;
font-size: 150%;
}
a:link {
    text-decoration: none;
font-size: 150%;
}
</style>

<?php

    echo "<div align = 'center'>";
    echo "<a href = 'http://upc.sportsmanssupplyinc.com/'>Do Another UPC Search</a>";
$items = array();
$file = fopen('upload/upc_file.csv', 'r');
//$counter = 0;
while (($line = fgetcsv($file)) !== FALSE) {

foreach ($line as $value){
    $items[] = $value;
        }
    }
fclose($file);
    ?>
    <a href = "scripts/display.php" target = "_blank"><strong>Display Results in a Page</strong></a><br>
<a href = "scripts/export.php"><strong>Click to export results to a CSV</strong></a>
    <br>
<?php
    echo "Processing ";
    echo "<strong>";
    echo count($items);
    echo "</strong>";
    echo " records....";

    foreach ($items as $value){
$upc = $value;
// New Amazon 4-7-15
   // Defining the basic cURL function
require_once 'scripts/scrape.php';
require 'scripts/repeat-all.php';

        $upcdb = '"'.$mysqli->real_escape_string($upc).'"';

        if(!empty($item_namew)){

                    $item = '"'.$mysqli->real_escape_string($item_namew).'"';  
             }elseif(empty($item_namew)){

                    $item = '"'.$mysqli->real_escape_string($item_namea).'"';  
                    }elseif(empty($item_namea)) {

                    $item = '"'.$mysqli->real_escape_string($item_namee).'"';  
                }elseif ((empty($item_namew)) && (empty($item_namea)) && (empty($item_namee))){

                        $item = '"'.$mysqli->real_escape_string('No item name found').'"';
                }

        if(!empty($pricew)){

            $pricew = '"'.$mysqli->real_escape_string($pricew).'"';
        }else{

            $pricew = '"'.$mysqli->real_escape_string('No Walmart price found').'"';
        }
        if(!empty($pricea)){

            $pricea = '"'.$mysqli->real_escape_string($pricea).'"';
        }else{

            $pricea = '"'.$mysqli->real_escape_string('No Amazon price found').'"';
        }
        if(!empty($pricee)){
            $pricee = trim($pricee);

            $pricee = '"'.$mysqli->real_escape_string($pricee).'"';
        }else{

            $pricee = '"'.$mysqli->real_escape_string('No Best eBay price found').'"';
        }

        $insert_row = $mysqli->query("INSERT INTO upclookup (upc, item_name, walmart_price, amazon_price, ebay_price) VALUES ($upcdb, $item, $pricew, $pricea, $pricee)");

    ?>
<!-- Progress information -->
<div id="information" style="width"></div>
</div>
<?php

// Tell user that the process is completed
echo "<strong>";
echo '<script language="javascript">document.getElementById("information").innerHTML="Task Completed."</script>';
echo "</strong>";
?>

    <?php

                }

    if (file_exists('upload/upc_file.csv')) {
            unlink('upload/upc_file.csv');
    }

    die();

}else{

}
?>