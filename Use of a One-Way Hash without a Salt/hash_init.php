<?php
$file_name = $_GET['file_name'];
file_put_contents('example.txt', 'Наглый коричневый лисёнок прыгает вокруг ленивой собаки.');
hash_init('sha256', $file_name);
?>