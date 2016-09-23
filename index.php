<?php

// Settings File
include_once('settings.php');

// Connection String
$sql = new mysqli(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB);

// Error Control
if(mysqli_connect_errno())
{
	echo SQL_CONNECT_ERR_MSG  . mysqli_connect_errno();
}

// Closing DB Connection
$sql->close();

?>
