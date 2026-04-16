<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuário</title>
</head>

<body>

    <form action="/register" method="post"> <!-- Formulário de registro - POST -->
        <label>Nome:</label><br>
        <input type="text" name="name" placeholder="Por favor, insira 
        seu nome" required><br>

        <label>Email:</label><br>
        <input type="text" name="email" placeholder="Por favor, insira seu email" required><br>

        <label>Senha:</label><br>
        <input type="password" name="password" placeholder="Entre com a senha" required><br>

        <button type="submit">Registrar</button>
    </form>
    <br>
    


</body>
</html>