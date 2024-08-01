@section('header')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Админка сайта</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('css/style.css')}}">--}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
    <link rel="shortcut icon" type="image/png" href="{{asset('img/favicon.svg')}}">
</head>
<body>
<header class="header-admin">
    <div class="container">
        <nav class="navbar bg-body-tertiary py-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{asset('img/icon.png')}}" alt="Logo" width="30" height="24"
                         class="d-inline-block align-text-top">
                    Блог
                </a>
            </div>
        </nav>
        <nav class="py-2 bg-body-tertiary border-bottom">
            <div class="container d-flex flex-wrap">
                <ul class="nav me-auto">
                    <li class="nav-item"><a href="{{ route('posts.index') }}"
                                            class="nav-link link-body-emphasis px-2 active"
                                            aria-current="page">Вывод статей</a></li>
                    <li class="nav-item"><a href="{{ route('posts.create') }}" class="nav-link link-body-emphasis px-2">Создать
                            статью</a></li>
                    {{--                    <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Edit</a></li>--}}
                    {{--                    <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Disabled</a></li>--}}
                    @if(@auth()->user() && @auth()->user()->role === 'admin')
                        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Админская зона</a>
                        </li>
                    @endif
                </ul>

                <ul class="nav">
                    @if(!@auth()->user())
                        <li class="nav-item"><a href="{{ route('login') }}"
                                                class="nav-link link-body-emphasis px-2">Login</a></li>
                        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link link-body-emphasis px-2">Sign
                                up</a></li>
                    @else
                        <li class="nav-item"><a href="" class="nav-link link-body-emphasis px-2">{{ auth()->user()->name ?? 'Пользователь неавторизован' }}</a></li>
                        <li class="nav-item">
                            <a class="nav-link link-body-emphasis px-2" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endif

                </ul>
            </div>
        </nav>
    </div>
</header>

@show

@yield('main', 'Вы увидите это сообщение, если ничего нет в секции main дочернего шаблона')


@section('footer')
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="{{ route('posts.index') }}" class="nav-link px-2 text-muted">Index</a>
                </li>
                <li class="nav-item"><a href="{{ route('posts.create') }}" class="nav-link px-2 text-muted">Create</a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Edit</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Disabled</a></li>
            </ul>
            <p class="text-center text-muted">© {{date('Y')}} Aleks Lyashenko</p>
        </footer>
    </div>
    {{--    <script src="{{asset('js/site.js')}}"></script>--}}
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
@show
