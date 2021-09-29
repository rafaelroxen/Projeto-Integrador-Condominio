<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condo Mobile - Cadastro</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <a href="/index.html" id="btn_login" type="submit">Logar</a>
  <div class="login-container">
    <h1>Cadastro</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
        <input type="text" name="telefone" placeholder="Telefone" maxlength="30">
        <input type="email" name="email" placeholder="E-mail" maxlegth="40">
        <input type="password" name="senha" placeholder="Senha" maxlength="32">
        <input type="password" name="confSenha" placeholder="Confirmar Senha">
        <input type="submit" value="Cadastar">
        
    </form>
  </div>

</body>
</html>

