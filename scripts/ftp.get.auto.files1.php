<?php
/*-----FTP to server-----*/
$ftp_server ='www.rapidretail.net';
$ftp_user_name = 'ssi_RapidRetailAdmin';
$ftp_user_pass = 'Rapid_rra!';
$local_file1 = '/var/www/domains/sportsmanssupplyinc.com/upc/htdocs/upload/manu_file.csv';
$server_file1 = '/RapidRetail/ImageFeed/manu_file.csv';

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
if (ftp_chdir($conn_id, "/RapidRetail/ImageFeed/")) {
    echo "Current directory is now: " . ftp_pwd($conn_id) . "\n";
} else { 
    echo "Couldn't change directory\n";
}
// upload the file

$upload1 = ftp_get($conn_id, $local_file1, $server_file1, FTP_BINARY); 

// check upload status
if (ftp_get($conn_id, $local_file1, $server_file1, FTP_BINARY)) { 
    echo "Successfully written to $local_file1\n";
} else {
    echo "There was a problem\n";
}

// close the FTP stream 
ftp_close($conn_id); 
?>