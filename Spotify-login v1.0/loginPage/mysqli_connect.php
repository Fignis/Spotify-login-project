<?php

DEFINE('DB_USER','root'); # the "defines" (like db_user) are the constants; can change to anything else as a name but should be unique
DEFINE('DB_PASSWORD','');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','accounts');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('ERROR, could not connect to mysql. Try again.' .mysqli_connect_error());

mysqli_set_charset($dbc,'utf8');
?>