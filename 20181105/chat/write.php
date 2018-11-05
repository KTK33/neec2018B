<?php
$msg = $_GET["msg"];

$fp = fopen("data.txt", "a");
flock($fp, LOCK_EX);
fwrite($fp, $msg."\n");
flock($fp, LOCK_UN);
fclose($fp);

header("Location: chat.php");

