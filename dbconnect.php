<?php
/* Connection: host, username, password, database */
$conn = new mysqli('localhost', 'at5a3160_ataksvg', 'P@ssword','at5a3160_ataksvg');

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>