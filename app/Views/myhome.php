<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem-vindo à sua página inicial!</h1>
    <h2> Olá, <?= session()->get('user_name') ?>!</h2>
    <!-- criar login e logout  e flashmessages --> 
     <br>
     <br>
        <a href="/logout">Logout</a>
</body>
</html>