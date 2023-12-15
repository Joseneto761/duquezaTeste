<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    @vite('resources/css/app.css')
</head>

<body>
    @foreach ($services as $service)
        <div class="w-[15rem] h-[20rem] p-5 rounded-lg border-2 border-black">
            <p>{{ $service->name }}</p>
            <p>{{ $service->description }}</p>
            <p>{{ $service->hotness }}</p>
            <img src={{ $service->image_path }} alt="">
        </div>
    @endforeach
</body>

</html>
