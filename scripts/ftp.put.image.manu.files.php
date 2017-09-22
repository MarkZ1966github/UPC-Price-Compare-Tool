<?php
/*-----FTP to server-----*/
$ftp_server ='www.rapidretail.net';
$ftp_user_name = 'ssi_RapidRetailAdmin';
$ftp_user_pass = 'Rapid_rra!';
$local_file = '../auto/manu_file.csv';
$server_file = '/RapidRetail/ImageFeed/manu_file.csv';
$local_file1 = '../auto/images_file.csv';
$server_file1 = '/RapidRetail/ImageFeed/images_file.csv';
// set up basic connection
$conn_id = ftp_connect($ftp_server); 

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 
 ftp_pasv($conn_id, true);
// check connection
if ((!$conn_id) || (!$login_result)) { 
    echo "FTP connection has failed!";
    echo "<br>";
    echo "Attempted to connect to $ftp_server for user $ftp_user_name";
    echo "<br>";
    exit; 
} else {
    echo "Connected to $ftp_server, for user $ftp_user_name";
    echo "<br>";
}
echo "Current directory: " . ftp_pwd($conn_id) . "\n";
if (ftp_chdir($conn_id, "/RapidRetail/ImageFeed/")) {
    echo "Current directory is now: " . ftp_pwd($conn_id) . "\n";
    echo "<br>";
} else { 
    echo "Couldn't change directory\n";
    echo "<br>";
}

// upload the file

if (ftp_put($conn_id, $server_file, $local_file, FTP_BINARY)) { 
    echo "Successfully written to $server_file\n";
    echo "<br>";
} else {
    echo "There was a problem\n";
    echo "<br>";
}

if (ftp_put($conn_id, $server_file1, $local_file1, FTP_BINARY)) { 
    echo "Successfully written to $server_file1\n";
    echo "<br>";
} else {
    echo "There was a problem\n";
    echo "<br>";
}


// close the FTP stream 
ftp_close($conn_id); 
?>