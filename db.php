<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $name = 'laba4';     

  $link = mysqli_connect($host, $user, $pass, $name);
  if ($link -> connect_error) {
    die("Ошибка подключения к базе данных: " . $link -> connect_error);
    }
?>