<?php
// Connect to MSSQL and select the database
mssql_connect('KALLESPC\SQLEXPRESS', 'sa', 'phpfi');
mssql_select_db('php');

// Create a new stored prodecure
$stmt = mssql_init('NewUserRecord');

// Bind the field names
mssql_bind($stmt, '@username',  $_GET['name'],  SQLVARCHAR,  false,  false,  60);
mssql_bind($stmt, '@name',      'Kalle',  SQLVARCHAR,  false,  false,  60);
mssql_bind($stmt, '@age',       19,       SQLINT1,     false,  false,   3);

// Execute
mssql_execute($stmt);

// Free statement
mssql_free_statement($stmt);
?>