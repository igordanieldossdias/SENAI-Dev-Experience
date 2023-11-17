<?php
        include "conexao.php";
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nome = $_POST ["nome"];
        $email = $_POST ["email"];
        $senha = $_POST["senha"];

        $senha_hashed = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuario (usuario_nome, usuario_email, usuario_senha, usuario_cpf) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param ("sssi", $nome, $email, $senha_hashed, $cpf);
        $stmt->execute();        

        
        header("Location: ../index.php");
    }
    
    
$conn->close();
?>
