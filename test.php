<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
mysqli_set_charset($con, "utf8");
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT username,password,shopname FROM deliver WHERE deliver_id = 1');
// In this case we can use the account ID to get the account info.
$stmt->execute();
$stmt->bind_result($username,$password,$shopname);

$stmt->fetch();
$stmt->close();

echo $shopname;

$order  = "SELECT * FROM ordered WHERE shopname = '$shopname' AND status = 'readytodeliver' ";

 $sql = mysqli_query($con,$order);


while ($row = mysqli_fetch_array($sql)){

    echo $row["status"];
}

$order  = "SELECT * FROM menu WHERE shopname = '$shopname' ";

 $sql = mysqli_query($con,$order);


while ($row = mysqli_fetch_array($sql)){

    echo $row["id"];
}


?>