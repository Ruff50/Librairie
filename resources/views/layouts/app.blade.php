<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Librairie</title>
</head>
<body class="w-full flex flex-col justify-between">

@include('layouts/header') 
<main class="h-full">
   @yield('main')  
</main>   
@include('layouts/footer')
</body>
</html> 