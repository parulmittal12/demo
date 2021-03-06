<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Demo Project</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <style>
   

h2 {
  color: #aaa;
  font-size: 30px;
  line-height: 40px;
  font-style: italic;
  font-weight: 200;
  margin: 40px;
  text-align: center;
  text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.7);
}

.box {
  background: #fff;
  border-radius: 2px;
 
  margin: 30px 5%;
  padding: 5%;
}

@media (min-width: 544px) {
  .box {
    margin: 40px auto;
    max-width: 440px;
    padding: 40px;
  }
}


/* The list style
-------------------------------------------------------------- */

.directory-list ul {
  margin-left: 10px;
  padding-left: 20px;
  border-left: 1px dashed #ddd;
}

.directory-list li {
  list-style: none;
  color: #888;
  font-size: 17px;
  font-style: italic;
  font-weight: normal;
}

.directory-list a {
  border-bottom: 1px solid transparent;
  color: #888;
  text-decoration: none;
  transition: all 0.2s ease;
}

.directory-list a:hover {
  border-color: #eee;
  color: #000;
}

.directory-list .folder,
.directory-list .folder > a {
  color: #777;
  font-weight: bold;
}


/* The icons
-------------------------------------------------------------- */

.directory-list li:before {
  margin-right: 10px;
  content: "";
  height: 20px;
  vertical-align: middle;
  width: 20px;
  background-repeat: no-repeat;
  display: inline-block;
  /* file icon by default */
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><path fill='lightgrey' d='M85.714,42.857V87.5c0,1.487-0.521,2.752-1.562,3.794c-1.042,1.041-2.308,1.562-3.795,1.562H19.643 c-1.488,0-2.753-0.521-3.794-1.562c-1.042-1.042-1.562-2.307-1.562-3.794v-75c0-1.487,0.521-2.752,1.562-3.794 c1.041-1.041,2.306-1.562,3.794-1.562H50V37.5c0,1.488,0.521,2.753,1.562,3.795s2.307,1.562,3.795,1.562H85.714z M85.546,35.714 H57.143V7.311c3.05,0.558,5.505,1.767,7.366,3.627l17.41,17.411C83.78,30.209,84.989,32.665,85.546,35.714z' /></svg>");
  background-position: center 2px;
  background-size: 60% auto;
}

.directory-list li.folder:before {
  background-position: center top;
  background-size: 75% auto;
}
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Demo Project
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @stack('js')
    <script>
      var allFolders = $(".directory-list li > ul");
        allFolders.each(function() {
        var folderAndName = $(this).parent();
        folderAndName.addClass("folder");
        var backupOfThisFolder = $(this);
        $(this).remove();
        folderAndName.wrapInner("<a href='#' />");
        folderAndName.append(backupOfThisFolder);
        folderAndName.find("a").click(function(e) {
          $(this).siblings("ul").slideToggle("slow");
          e.preventDefault();
        });

      });
    </script>
</body>
</html>

