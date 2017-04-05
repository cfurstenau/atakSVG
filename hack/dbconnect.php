<?php
/* Connection: host, username, password, database */
$conn = new mysqli('localhost', 'root', 'SS22hu4t','ataksvg');

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>