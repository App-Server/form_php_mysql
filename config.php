<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "novo_banco";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

?>