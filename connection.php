<?php
$databaseHost = 'localhost';
$databaseName = 'perform';
$databaseUsername = 'root';
$databasePassword = '';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
{
    if(!($conn))
    {
        die("connection failed.".mysqli_connect_error($conn));
    }
    /*
    else
    {
        echo "Connected"; 
    }
    */
}
?>
