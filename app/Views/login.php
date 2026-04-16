<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<form action="/login" method="post">
    <input type="text" name="email" placeholder="Por favor, insira seu email" required>
    <input type="password" name="password" placeholder="Entre com a senha" required>
    <button type="submit">Login</button>
</form>
<br>
<a href="/register">Registrar-se</a>  <!-- Link para a página de registro - GET -->

    
</body>
</html>