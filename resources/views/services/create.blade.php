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
    <form method="POST" action={{route('service.store')}} enctype='multipart/form-data' class="flex flex-col w-[10rem]">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="description">Description</label>
        <input type="text" name="description" id="description" required>

        <label for="hotness">Hotness</label>
        <input type="text" name="hotness" id="hotness" required>

        <label for="image">Image</label>
        <input type="file" name="image" id="image" required>

        <button type="submit">Create Service</button>
    </form>
</body>

</html>
