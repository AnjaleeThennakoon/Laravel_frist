@props([
    'title' => 'Laracasts'])

<!doctype html>
<html lang="en" data-theme="dracula">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-primary">

    <!-- Navigation -->
    <x-nav />

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

</body>
</html>
