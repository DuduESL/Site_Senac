<?php
  $host = 'localhost';
  $user = 'root';
  $senha = '';
  $banco = 'sitesenactech';

  $conn = new mysqli ($host, $user, $senha, $banco);
  
  if ($conn->connect_error){
	  die ("Falha na conexão". $conn_>connect_error);
	  
  }
?>