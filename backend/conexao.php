<?php
$servername = "mysql-connection";
$username = "root";
$password = "Senha123";
$database = "meubanco";
# este database precisa ser criado, pois ainda não existe.
# crie uma pasta database e dentro dela crie um arquivo dockerfile

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
