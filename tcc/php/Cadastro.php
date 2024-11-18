<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
    <link rel="stylesheet" href="../css/CadastroCliente.css" />
</head>
<body>
    <a href="home.php">
    <div class="logus">
        <img src="../img/logo.svg" alt="logo">
        <h1>HireQuest</h1>
    </div>
    </a>

    <div class="quadradoBranco">
        <div class="titulo">
            <img src="../img/logo.svg" alt="Logo" class="logo">
            <h1 id="CadastroTitulo">Cadastre-se</h1>
        </div>
        <div class="form">
            <form method="POST" action="Cadastro.php">
            <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" value="<?php if (isset($_POST['nome'])) { echo $_POST['nome']; } ?>" required>
                    </div>
                    <div class="input-box">
                        <label for="dataNascimento">Data Nascimento</label>
                        <input id="dataNascimento" type="date" name="dataNascimento" min="2006-01-01" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" value="<?php if (isset($_POST['email'])) { echo $_POST['email']; } ?>" required>
                    </div>
                    <div class="input-box">
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" name="senha" required minlength="8">
                    </div>

                    <div class="input-box">
                        <label for="CPF">CPF:</label>
                        <input type="text" name="CPF" \
                        pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \
                        title="Digite um CPF no formato: xxx.xxx.xxx-xx">
                    </div>

                    </div>

                    <div class="input-box">
                        <label for="certificacao">Certificação:</label>
                        <input type="text" id="certificacao" name="certificacao">
                    </div>
                    <div class="input-box">
                        <label for="nivel">Tipo de Usuário:</label>
                        <select id="nivel" name="nivel" required>
                            <option value="2">Usuário</option>
                            <option value="1">Administrador</option>
                        </select>
                    </div>

                    <div class="botao">
                        <button type="submit" name="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php

if(isset($_POST['submit'])){

    include_once('conexao.php');

    $nome = $_POST['nome'];
    $dataNascimento = $_POST['dataNascimento'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $CPF = $_POST['CPF'];
    $certificacao = $_POST['certificacao'];

    $clintes = mysqli_query($conexao, "INSERT INTO cadastro(nome, dataNascimento, email, senha, CPF, certificacao) VALUES ('$nome', '$dataNascimento', '$email', '$senha', '$CPF', '$certificacao')");
}

?>
</body>
</html>
