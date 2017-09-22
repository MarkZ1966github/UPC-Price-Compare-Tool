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

$fp = fopen('php://output', 'w');
if ($fp && $result) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="export.csv"');
    header('Pragma: no-cache');
    header('Expires: 0');
    fputcsv($fp, array_values($head));
    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        fputcsv($fp, array_values($row));
                        }
            fclose($fp);
                }
$clean = $mysqli->query('TRUNCATE TABLE  `upclookup`');
?>