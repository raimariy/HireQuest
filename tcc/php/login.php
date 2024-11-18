<?php 
session_start(); 
require_once("funcoes.php"); 
?>
<!DOCTYPE html>
<html lang="pt-BR"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Login.css" />   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login - Fiction</title>
</head>
<body>
<div class="logus">
      <img src="../img/logo.svg" alt="logo">
      <h1>HireQuest</h1>
    </div>
  

    <nav>
        <ul>
            <?php mostraBotaoLogout(); ?>
        </ul>
    </nav>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="cadastro.php" method="POST">
                <h1>Cadastrar Conta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <span>ou use seu e-mail para registro</span>
                <input type="text" name="nome" placeholder="Nome" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit">Cadastrar-se</button>
            </form>
        </div>

        <div class="form-container sign-in">
            <form action="home.php" method="POST">
                <h1>Bem-vindo(a)</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                </div>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit">Login</button>
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bem-vindo(a) de volta!</h1>
                    <p>Entre com seus dados pessoais para usar todos os recursos do site.</p>
                    <a href="home.php">
                        <button id="register">Cadastrar-se</button>
                    </a>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Não possui cadastro?</h1>
                    <p>Registre-se agora!</p>
                    <a href="cadastro.php">
                        <button id="login">Login</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
