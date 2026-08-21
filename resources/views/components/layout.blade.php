@props(['title' => 'Laracasts'])

<!doctype html>
<html lang="en" data-theme="night">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <!-- Tailwind + DaisyUI -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
  </head>

  <body class="bg-base-200">
    <!-- Navigation -->
    <x-nav />

    <!-- Logout Form -->
    @auth
      <form method="POST" action="/logout" class="p-4">
        @csrf
        <button type="submit" class="btn btn-ghost">Log Out</button>
      </form>
    @endauth

    <!-- Main Content -->
    <main class="max-w-3xl mx-auto p-6">
      {{ $slot }}
    </main>
  </body>
</html>
