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

// Count the number of users
$query = "SELECT COUNT(username) AS user_count FROM the_moon";
$result = mysqli_query($dbc, $query) or die("Query MySQL Error: " . mysqli_error($dbc));

// Fetch the result
$row = mysqli_fetch_assoc($result);
$user_count = $row['user_count'];

// Output the result
echo "Number of users: " . $user_count;

// Close the database connection
mysqli_close($dbc);

?>
