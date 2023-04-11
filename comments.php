<?php
date_default_timezone_set('EST');
$page = "Home";
$path = './';
include($path . 'assets/inc/header.php');
include($path . 'assets/inc/nav.php');
include 'dbh.inc.php';
include 'comments.inc.php'

?>

    <?php
    echo "<form method='POST' action='" . setComments($mysqli) . "'>
        <input type='hidden' name='uid' value='Anonymous'>
        <input type='hidden' name='date' value='" . date('Y-m-d H:i:s') . "'>
        <textarea name='message'></textarea><br>
        <button type = 'submit' name ='commentSubmit'>Comment</button>
    </form>";

    getComments($mysqli);

    ?>
    
<?php
include($path . 'assets/inc/footer.php');
?>
