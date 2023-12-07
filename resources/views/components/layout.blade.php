<!doctype html>
<html class="h-full" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @livewireStyles
    @vite('resources/css/app.css')


    <title>Codebreaker</title>
</head>
<body class="h-full bg-blue-950 text-white">
    {{ $slot }}
</body>
</html>
