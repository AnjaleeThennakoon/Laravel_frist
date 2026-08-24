@props(['title' => 'Laracasts'])

<!doctype html>
<html lang="en" data-theme="night">
  <head>
    <meta charset="UTF-8">
    <meta >
    <title>{{ $title }}</title>

    <!-- Tailwind + DaisyUI -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
  </head>

  <body class="bg-base-200">
    <!-- Navigation -->
    <x-nav />

    <!-- Main Content -->
    <main >
      {{ $slot }}
    </main>
  </body>
</html>
