<?php
//Open a new connection to the MySQL server
require_once 'my.cnf.php';
$mysqli = new mysqli($host,$user,$pw,$db);

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
$result = $mysqli->query('SELECT upc, item_name, walmart_price, amazon_price, ebay_price, reg_date FROM `upclookup`');
if (!$result) die('Couldn\'t fetch records');
$row_cnt = mysqli_num_rows($result);
$headers = $result->fetch_fields();
foreach($headers as $header) {
    $head[] = $header->name;
}
echo "<div align = 'center'>";
    echo "<a href = 'http://upc.sportsmanssupplyinc.com/'>Do Another UPC Search</a>";
    echo "</div>";
    echo "<br>";
    echo "<strong>SEARCH RESULTS:</strong><br><br>";
    echo "<table class='upctable'>";
    echo "<tr>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>UPC</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Item Name</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Walmart Price</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Amazon Price</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Best eBay Price</th>";
    echo "<th bgcolor='#D2D3D4' width='200' align='center'>Pricing Date</th>";
    echo "</tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td align='center'>". $row["upc"] ."</td>";
        echo "<td align='center'>" . $row["item_name"] . "</td>";
        echo "<td align='center'>" . $row["walmart_price"] . "</td>";
        echo "<td align='center'>" . $row["amazon_price"] . "</td>";
        echo "<td align='center'>" . $row["ebay_price"] . "</td>";
        echo "<td align='center'>" . $row["reg_date"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$mysqli->close();
?>