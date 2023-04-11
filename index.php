<?php
$page = "Home";
$path = './';
include($path . 'assets/inc/header.php');
include($path . 'assets/inc/nav.php');

//1
require $path . '../../dbConnect.inc';
//2
$sql = "SELECT content FROM modularsite where name='" . $page . "'";
//3
$result = $mysqli->query($sql);

//4
if ($result->num_rows > 0) {
    while ($row = $result->FETCH_ASSOC()) {
        echo $row['content'];
    }
} else {
    echo '0 results, you did something wrong!';
}

include($path . 'assets/inc/footer.php');
?>
