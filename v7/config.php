<?php
if (file_exists(dirname(__FILE__).'/config-local.php')) 
{
    include dirname(__FILE__).'/config-local.php';
}
else 
{   	 
    $servername = "localhost";
    $username = "u920006094_bellshipitnow";
    $password = "Hachi#123";
    $database = 'u920006094_bellshipitnow';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
}