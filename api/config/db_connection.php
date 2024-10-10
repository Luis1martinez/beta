<?php
/*
Postgress Database connecttion
Developer: LuisMi
*/

$servername = "localhost";
$username   = "postgres";
$password   = "unicesmag";
$dbname     = "beta";
$port       = "5432";

$data_connection = "
host     =   $servername 
port     =   $port 
dbname   =   $dbname 
user     =   $username
password =   $password
";

$conn = pg_connect($data_connection);
if (!$conn) {
    die("connection failed:". preg_last_error());
} else {
    echo "Connection successfully";
}

pg_close($conn);

?>
