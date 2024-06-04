<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/master.css') }}">
  <title>{{ $title }}</title>
</head>

<body>
  <main class="container">
    @include("Components.navbar")
    <section class="hero">
      <div class="detail">
        <h1 class="title">
          {{ $title_to_hero }}
        </h1>
        <p class="text">
          {{ $subtitle_to_hero }}
        </p>
        <a href="{{ $link_to_hero }}" class="link btn btn-primary"> {{ $label_to_hero }} </a>
      </div>
      <img src="{{ asset($img) }}" class="img">
    </section>
    @yield('content')
  </main>
  <script>
    const header = document.querySelector('.header');

    const headerScroller = () => {
      return this.scrollY >= 600 ?
        header.classList.add('scroller') :
        header.classList.remove('scroller');
    }
    window.addEventListener('scroll', headerScroller);
  </script>
</body>

</html>