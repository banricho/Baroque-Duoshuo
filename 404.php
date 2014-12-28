<?php
$url = @$_SERVER['REQUEST_URI'];
if (empty($url)) {
header("Location: /");
exit;
}

$newurl = strtolower($url);
if ($url == $newurl) header("Location: /");
else header("Location: $newurl");
?>