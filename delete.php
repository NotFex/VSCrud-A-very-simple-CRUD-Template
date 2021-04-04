<?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM inputs WHERE id=$id");
header("Location: index.php");
?>