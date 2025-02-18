<?php

// Database Configuration
define('DBUSER', 'id21942292_papaya');
define('DBPW', 'Oty_1234');
define('DBHOST', 'localhost');
define('DBNAME', 'id21942292_oak_new');

// Connect to the Database
$dbc = mysqli_connect(DBHOST, DBUSER, DBPW);

if (!$dbc) {
    die("Database connection failed: " . mysqli_error($dbc));
    exit();
}

// Select the Database
$dbs = mysqli_select_db($dbc, DBNAME);

if (!$dbs) {
    die("Database selection failed: " . mysqli_error($dbc));
    exit();
}

// Get data from GET parameters
//$joint_id = mysqli_real_escape_string($dbc, $_GET['id']);
$joint_username = mysqli_real_escape_string($dbc, $_GET['username']);
$joint_email = mysqli_real_escape_string($dbc, $_GET['email']);
$joint_phone = mysqli_real_escape_string($dbc, $_GET['phone']);



// Insert data into the database
$query = "INSERT INTO the_moon (username, email, phone) VALUES ('$joint_username', '$joint_email', '$joint_phone')";



$result = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " .mysqli_error($dbc));

if ($result) {
    echo "Record inserted successfully";
} else {
    echo "ERROR: Could not execute query. " . mysqli_error($dbc);
}

// Close the database connection
mysqli_close($dbc);

?>