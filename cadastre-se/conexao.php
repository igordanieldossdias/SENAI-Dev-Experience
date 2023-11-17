<?php

$conn = new mysqli ("localhost","root","","devexperience");
        
    if ($conn->connect_error) {
        die ("Erro de conexão". $conn->connect_error);

    $stmt->close();
}

$conn->close();
?>