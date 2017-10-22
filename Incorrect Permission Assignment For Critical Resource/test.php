<?php
$filePath = './MOPAS_1_chmod_777_test.txt';
file_put_contents($filePath, 'test');
chmod($filePath,0777);
unlink($filePath);
?>