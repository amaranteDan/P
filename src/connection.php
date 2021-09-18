<?php 
mysqli_report(MYSQLI_REPORT_ERROR);
//Pegando a conexao do arquivo config para acessar o banco
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWD, DB_NAME);

