<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>@yield('title')</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{asset('assets/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{asset('assets/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="{{url('siswa')}}" class="brand-logo">Crud<b>Basic</b></a>
      <ul class="right hide-on-med-and-down">
        <li {{ Request::is('siswa/create') ? 'class=active' : '' }}><a href="{{url('siswa/create')}}">Tambah</a></li>
      </ul>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <h2 class="header center orange-text">@yield('title')</h2>
      @yield('content')
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{asset('assets/js/materialize.js')}}"></script>
  <script src="{{asset('assets/js/init.js')}}"></script>

  </body>
</html>
