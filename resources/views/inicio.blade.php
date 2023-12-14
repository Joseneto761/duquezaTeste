<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <form method="get">
        @csrf

        <b>Nome</b>
        <input type="text" name="nome"><br><br>

        <b>Idade</b>
        <input type="text" name="idade"><br><br>

        <b>Nascimento</b>
        <input type="text" name="nascimento"><br><br>

        <input type="submit" value="Salvar">
    </form>

    <hr>
    <label>Nome: {{nome}}</label><br>
    <label>Idade: {{idade}}</label><br>
    <label>Nascimento: {{nascimento}}</label><br>

    
</body>
</html>