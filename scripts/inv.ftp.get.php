<?php
/*-----FTP to server-----*/
$ftp_server ='www.rapidretail.net';
$ftp_user_name = 'THIS_IS_FAKE_USER6';
$ftp_user_pass = 'Fake_user6!';
$local_file = '/var/www/domains/sportsmanssupplyinc.com/www/ssi-inv.csv';
$server_file = '/LocalUser/THIS_IS_FAKE_USER6/Inventory/ssi-inv.csv';
// set up basic connection
$conn_id = ftp_connect($ftp_server); 

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 
 ftp_pasv($conn_id, true);
// check connection
if ((!$conn_id) || (!$login_result)) { 
    echo "FTP connection has failed!";
    echo "Attempted to connect to $ftp_server for user $ftp_user_name"; 
    exit; 
} else {
    echo "Connected to $ftp_server, for user $ftp_user_name";
}
echo "Current directory: " . ftp_pwd($conn_id) . "\n";
if (ftp_chdir($conn_id, "/Inventory/")) {
    echo "Current directory is now: " . ftp_pwd($conn_id) . "\n";
} else { 
    echo "Couldn't change directory\n";
}
// upload the file

$upload = ftp_get($conn_id, $local_file, $server_file, FTP_BINARY); 

// check upload status
if (ftp_get($conn_id, $local_file, $server_file, FTP_BINARY)) { 
    echo "Successfully written to $local_file\n";
} else {
    echo "There was a problem\n";
}

// close the FTP stream 
ftp_close($conn_id); 
?>