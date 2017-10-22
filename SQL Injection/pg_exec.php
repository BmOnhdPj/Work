<?php
// Подключение к базе данных "mary"
$dbconn = pg_connect("host=localhost port=5432 dbname=eshop user=postgres password=P0s_sw0rd");

// Подготовка запроса
$sql = "SELECT * FROM users WHERE name = '" . $_GET['name'] . "'";
$result = pg_prepare($dbconn, "my_query", $sql);

// Запуск запроса на выполнение. Стоит отметить, что нет необходимости экранировать 
// спецсимволы в строке "Joe's Widgets"
$result = pg_execute($dbconn, "my_query", array());

while ($row = pg_fetch_row($result)) {
  echo $row[1];
  echo "<br />\n";
}

?>