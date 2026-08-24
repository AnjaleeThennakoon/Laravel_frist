@props(['title' => 'Laracasts'])

<!doctype html>
<html lang="en" data-theme="night">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- DaisyUI -->
    <link
        href="https://cdn.jsdelivr.net/npm/daisyui@5"
        rel="stylesheet"
        type="text/css"
    />

    <!-- DaisyUI Themes -->
    <link
        href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css"
        rel="stylesheet"
        type="text/css"
    />
</head>

<body class="min-h-screen bg-base-200">

    <!-- Navigation -->
    <x-nav />

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

</body>
</html>