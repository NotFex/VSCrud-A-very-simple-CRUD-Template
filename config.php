

<?php
/*
 * Config:
 */
$hostname = "localhost"; #Hostname / IP
$user = "root"; #DB User (you should not use root btw.)
$pw = ""; #User Password
$db = "democrud"; #What database mysql should connect to

// Establishes connection.
$conn = new mysqli($hostname, $user, $pw, $db);
// Checks if an Connection is established, if not it returns an error with a simplified errormessage.
if ($conn->connect_error) {
    die("<hr>Cant establish a connection | Error below: <hr>" . $conn->connect_error);
}

?>