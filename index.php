<?php
$url = substr($PHP_SELF, 0, -9) . "pages/home.php";
header("Location: $url");
exit;