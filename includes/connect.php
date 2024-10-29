<?php
// Database connection parameters
$host = '${DBInstanceEndpoint}'; // RDS endpoint
$user = 'admin'; // Database admin user
$password = '${DBPassword}'; // Admin password
$dbname = '${DBName}'; // Database name

// Create connection
$con = new mysqli($host, $user, $password, $dbname);

// Check connection and provide detailed error reporting
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error . "<br>Error Number: " . $con->connect_errno);
} else {
    echo "Successfully connected to the database: " . $dbname . " at " . $host;
}

// Further operations (queries) can be placed here
?>
