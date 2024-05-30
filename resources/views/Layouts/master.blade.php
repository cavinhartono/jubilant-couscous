<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
</head>

<body>
  <main class="container">
    @include("Components.navbar")
    <section class="hero">
      <h1 class="title">
        {{ $title_to_hero }}
      </h1>
      <p class="text">
        {{ $subtitle_to_hero }}
      </p>
    </section>
    @yield('content')
  </main>
</body>

</html>