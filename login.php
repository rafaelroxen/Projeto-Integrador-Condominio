<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condo Mobile - Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <div class="login-container">
    <h1>Login</h1>
    <form method="POST" class="form-signin" action="logar.php">
      <label for="email">E-mail</label>
      <input type="email" name="email" id="email" placeholder="Digite seu e-email" autocomplete="off">
      <label for="password">Senha</label>
      <input type="password" name="senha" id="password" placeholder="Digite sua senha">
      <div id="forgot-pass-cadastrar">
        <a href="#" id="forgot-pass">Esquerci minha senha!</a>
        <a href="cadastrar.php"">Cadastrar</a>
      </div>
      <input type=" submit" value="Login">
    </form>
  </div>

</body>

</html>