<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Document</title>

    @vite('resources/css/app.css')
</head>

<body>
    <form method="POST" action={{route('service.store')}} class="flex flex-col w-[10rem]">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name">

        <label for="description">Description</label>
        <input type="text" name="description" id="description">

        <label for="hotness">Hotness</label>
        <input type="text" name="hotness" id="hotness">

        <button type="submit">Create Service</button>
    </form>
</body>

</html>
