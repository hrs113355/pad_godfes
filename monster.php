<?php
    require_once 'lib/mysql_connect.php';
    $sql = "select pad_id, name from monsters where pad_id=".mysql_escape_string($_GET['id']);
    $result = mysql_query($sql);
    $return = mysql_fetch_row($result);

    echo $return[1];
?>
