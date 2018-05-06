<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "controlefrequencia";
$conexao = mysqli_connect ($host, $user, $pass, $banco);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>
