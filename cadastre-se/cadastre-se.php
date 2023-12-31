<?php 
include "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário de inscrição</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="Banner - Login2.png" alt="logo do evento">
        </div>
        <div class="form">
            <form action="cadastrar-se.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome completo:</label>
                        <input id="firstname" type="text" name="nome" placeholder="Digite seu nome completo:" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail:</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail:" required>
                    </div>

                    <div class="input-box">
                        <label for="number">CPF:</label>
                        <input id="number" type="tel" name="number" placeholder="Digite seu CPF:" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit"><a href="index.php">Continuar</a></button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
