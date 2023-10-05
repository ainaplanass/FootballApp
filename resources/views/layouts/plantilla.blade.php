<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <nav class="bg-green-500 p-4 text-white">
        <div class="container mx-auto">
            <h1 class="text-2xl font-semibold">Lliga de Fútbol Escolar Barcelona Sants</h1>
        </div>
    </nav>

    <div class="container mx-auto p-4">
        @yield('content')
    </div>

</body>
</html>
