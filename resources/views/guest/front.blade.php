<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Medicina</title>
    <link rel="stylesheet" href="{{asset("css/front.css")}}">
</head>
<body>
    <nav class="navbar navbar-light mb-3 navbar-expand navbar-expand-sm" style="background-color: rgb(4, 60, 82); margin-bottom: 0px!important;">
        <div class="container-fluid">
                <a class="navbar-brand col-4 px-0" href="{{ url('/') }}">
                    <img width="110rem" src="{{ asset('/images/start-your-blog-.png') }}" alt="">
                </a>           
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav mt-2 ml-auto" style="flex-direction: row; justify-content: flex-end;">
                    <!-- Authentication Links -->  
                        @guest
                            <li class="nav-item">
                                <a style="background: inherit; border-radius: 5px; color: #5affb2; border: 1px solid #5affb2;" class="nav-link mr-2 px-3 ml-auto" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a style="background:#5affb2; border-radius: 5px; color: #fff; border: 1px solid #5affb2;" class="nav-link px-3" href="{{ route('register') }}"><i class="fas fa-home"></i> Iscriviti</a>
                                </li>
                            @endif
                            @else
                                <li class="nav-item dropdown">
                                <a style="background:#5affb2; border-radius: 5px; color: #fff" id="navbarDropdown" class="nav-link dropdown-toggle px-3" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user"></i> {{ Auth::user()->name ?? 'User ' . Auth::user()->id }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a style="color: #000;"class="dropdown-item" href="{{ route('admin.posts.index') }}">
                                        {{ __('Dashboard') }}
                                    </a>
                                    <a style="color: #000;" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div id="app">
    </div>
    <script src="{{asset("js/front.js")}}"></script>
</body>
</html>