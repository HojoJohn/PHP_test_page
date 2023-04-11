<?php


$mysqli = mysqli_connect("localhost", "iste240t40", "Exercise2-goalpost", "iste240t40");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
