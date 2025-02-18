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

// Check if username is provided
if(isset($_POST['username'])){
    $username = $_POST['username'];

    // Delete the specified username
    $delete_query = "DELETE FROM the_moon WHERE username = '$username'";
    $delete_result = mysqli_query($dbc, $delete_query) or die("Delete MySQL Error: " . mysqli_error($dbc));

    if ($delete_result) {
        echo "Deleted username: $username";
    } else {
        echo "Failed to delete username";
    }
} else {
    echo "No username provided";
}

// Close the database connection
mysqli_close($dbc);

?>
