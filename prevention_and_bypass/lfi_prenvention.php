<?php
$file = $_GET["file"];
$safe_file = str_replace('../', '', $file);
include( __DIR__ . '/files/uploads/' . $safe_file);
?>