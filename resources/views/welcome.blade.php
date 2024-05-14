<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project T</title>
    <link rel="shortcut icon" href="https://th.bing.com/th/id/R.1a551aa4cba59342dff2decfbaa9c8dd?rik=KQTDhx1ZUAAfjA&riu=http%3a%2f%2fpluspng.com%2fimg-png%2flogo-template-png-logo-templates-1655.png&ehk=9MRokJPqMM6lr6AsMn50qqBGQgGuPYXFuTzMFbKjOa8%3d&risl=&pid=ImgRaw&r=0" type="x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @vite(['resources/sass/global.scss'])
    @vite(['resources/sass/home.scss'])


</head>

<body class="antialiased">

<nav class="navbar container-fluid navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="https://th.bing.com/th/id/R.1a551aa4cba59342dff2decfbaa9c8dd?rik=KQTDhx1ZUAAfjA&riu=http%3a%2f%2fpluspng.com%2fimg-png%2flogo-template-png-logo-templates-1655.png&ehk=9MRokJPqMM6lr6AsMn50qqBGQgGuPYXFuTzMFbKjOa8%3d&risl=&pid=ImgRaw&r=0" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Project-T
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/news">Tech News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/programming">Programming Mania</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tools">ToolShed</a>
        </li>
    </ul>
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <!-- <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Signup</a>
          </li> -->
          <form action="{{route('logout')}}" method="POST" class="d-flex" role="search">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Logout</button>
          </form>

    </ul>
    </div>
  </div>
</nav>

    @yield('home-content')
    @yield('news-content')
    @yield('locomotive')
    @yield('register-content')
    @yield('login-content')
    @yield('tools-content')
    @yield('programming-content')
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>