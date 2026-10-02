<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home - WeTrain</title>
</head>

<body class="bg-base-100">
    <x-nav />
    <main class="flex justify-center">{{ $slot }}</main>
</body>

</html>