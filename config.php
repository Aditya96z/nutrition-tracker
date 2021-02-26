<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql210.epizy.com');
define('DB_USERNAME', 'epiz_27899764');
define('DB_PASSWORD', 'aD7mo8wzimwD');
define('DB_NAME', 'epiz_27899764_contactus');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
