@props(['title' => 'Laracasts'])

<!doctype html>
<html lang="en" data-them="night">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />


</head>
    <body class="">
    <x-nav />

    <main class="max-w-3xl mx-auto">
      {{ $slot }}
    </main>
  </body>
</html>
