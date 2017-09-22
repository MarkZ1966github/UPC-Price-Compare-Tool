<?php
/** This section is for the csv upload **/
if ( isset($_POST["submit"]) ) {
    //Open a new connection to the MySQL server
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
    echo "</div>";
    echo "<br>";
    echo "<strong>SEARCH RESULTS:</strong><br><br>";
    echo "<table class='upctable'>";
    echo "<tr>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>UPC</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Image</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Item Name</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Best eBay Price</th>";
    echo "</tr>";

$items = array();
$file = fopen('upload/upc_file.csv', 'r');
//$counter = 0;
while (($line = fgetcsv($file)) !== FALSE) {

foreach ($line as $value){
    $items[] = $value;
        }
    }
fclose($file);
    echo "<div align = 'center'>";
    ?>
<a href = "scripts/export.php"><strong>Click to export results to a CSV</strong></a>
    <br>
<?php
    echo "Processing ";
    echo "<strong><font size = '5'>";
//    echo $counter;
//    echo "</font></strong>";
//    echo " of ";
//    echo "<strong><font size = '5'>";
    echo count($items);
    echo "</font></strong>";
    echo " items... <br></div>";
    foreach ($items as $value){
$upc = $value;
require_once 'scripts/scrape.php';
require 'scripts/repeat-ebay.php';
        echo "<tr>";
        echo "<td align='center'>". $upc ."</td>";
        $upcdb = '"'.$mysqli->real_escape_string($upc).'"';
        if(empty($image)){
        echo "<td align='center'><strong>No image found</strong></td>";
        $image = '"'.$mysqli->real_escape_string('No image found').'"';
                    }else{
                        echo "<td align='center'><img src =" . $image. "></td>";
                        $image = '"'.$mysqli->real_escape_string($image).'"';
                    }
        if(empty($item_name)){
            echo "<td align='center'><strong>No item name found</strong></td>";
            $item = '"'.$mysqli->real_escape_string('No item name found').'"';           
        }else{
            echo "<td align='center'>" . $item_name . "</td>";
            $item = '"'.$mysqli->real_escape_string($item_name).'"';
        }
        if(empty($price)){
            echo "<td align='center'><strong>No Best eBay price found</strong></td>";
            $pricee = '"'.$mysqli->real_escape_string('No Best eBay price found').'"';
        }else{
            $price = trim($price);
            echo "<td align='center'>" . $price . "</td>";
            $pricee = '"'.$mysqli->real_escape_string($price).'"';
        }
        echo "</tr>";
        $insert_row = $mysqli->query("INSERT INTO upclookup (upc, image, item_name, ebay_price) VALUES($upcdb, $image, $item, $pricee)");

    flush();
    ob_flush();
    // $counter++;

    ?>
<!-- Progress bar holder -->
<div align = "center">
<div id="progress" style="width:500px;border:1px solid #ccc;"></div>
<!-- Progress information -->
<div id="information" style="width"></div>
</div>
<?php
// Total processes
$total = count($items);
// Loop through process
for($i=1; $i<=$total; $i++){
    // Calculate the percentation
    $percent = intval($i/$total * 100)."%";
    
    // Javascript for updating the progress bar and information

    echo '<script language="javascript">
    document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.';background-color:#F2DE41;\">&nbsp;</div>";
    document.getElementById("information").innerHTML="Processing your data....";
    </script>';
    

// This is for the buffer achieve the minimum size in order to flush data
    echo str_repeat(' ',1024*64);
    

// Send output to browser immediately
    flush();

// Sleep one second so we can see the delay
    sleep(1);
}
// Tell user that the process is completed
echo '<script language="javascript">document.getElementById("information").innerHTML="Task Completed."</script>';
?>
    <?php
                }
    echo "</table><br>";
    if (file_exists('upload/upc_file.csv')) {
            unlink('upload/upc_file.csv');
    }
    die();
}else{

}
?>