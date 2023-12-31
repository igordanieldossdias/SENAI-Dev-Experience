<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Entrar</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="Descrição - Login.png" alt="">
        </div>
        <div class="form">
            <form action="#" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Login</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome: </label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu nome completo" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail: </label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha: </label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit"><a href="#">Entrar</a></button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
