<?php
$file = $_GET["file"];
$baseDir = '/files/uploads/';
if (strpos($file,'/')===false && strpos($file,'\\')===false) {
    $file = $baseDir . $file;
}
if (strpos($file,$baseDir)!==0) {
    exit('Bele seyler etme, qadagandi!');
}
$fullPath = __DIR__.$file;
echo file_get_contents($fullPath);
?>
