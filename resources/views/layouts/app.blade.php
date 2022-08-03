<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts JQuery-->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Data table Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style type="text/css">

        tfoot {
            display: table-header-group;
        }

        .hide {
            display:none;
        }

    </style>

    <!-- Script Jquery Datatable-->
    <script>
        $(document).ready(function () {
            // Setup - add a text input to each footer cell
            $('#showtable tfoot .th').each(function () {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Search ' + title + '" />');
            });
        
            // DataTable
            var table = $('#showtable').DataTable({
                initComplete: function () {
                    // Apply the search
                    this.api()
                        .columns()
                        .every(function () {
                            var that = this;
        
                            $('input', this.footer()).on('keyup change clear', function () {
                                if (that.search() !== this.value) {
                                    that.search(this.value).draw();
                                }
                            });
                        });
                },
            });
        });
    </script>

    <!-- Style for ForamtA table  -->
    <script>
        function isChecked(){
            if(document.getElementById("form0_id6").checked == true){
                document.getElementById("toilet-has").style.display = "block";
                document.getElementById("no-toilet").style.display = "none";
            }else{
                document.getElementById("toilet-has").style.display = "none";
                document.getElementById("no-toilet").style.display = "block";
            }
            return;
        }
        function Cavity(){
            if(document.getElementById("form0_id16").checked == true){
                document.getElementById("form0_id17").style.display = "block";
            }else{
                document.getElementById("form0_id17").style.display = "none";
            }
            return;
        }
        function radio(x){
            if(x == 0){
                document.getElementById("form0_id11").style.display = "block";
            }else{
                document.getElementById("form0_id11").style.display = "none";
            }
            return;
        }
        function isDamaged(){
            if(document.getElementById("form0_id18").checked == true){
                document.getElementById("form0_id19").style.display = "block";
            }else{
                document.getElementById("form0_id19").style.display = "none";
            }
            return;
        }
        function isLivestock(){
            if(document.getElementById("form0_id32").checked == true){
                document.getElementById("form0_id33").style.display = "block";
            }else{
                document.getElementById("form0_id33").style.display = "none";
            }
            return;
        }
    </script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- href="{{ url('/') }}" -->
                <a class="navbar-brand" href="#">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            
                        @else

                        <!-- name change to role -->
                            @if( Auth::user()->role == 'superadmin')
                                <li class="nav-item">
                                    <a class="nav-link" href="/employee">{{ __('Employee') }}</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <!-- /register also redirecting to home -->
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif
                            @endif

                            @if( Auth::user()->role == 'admin')
                                <li class="nav-item">
                                    <a class="nav-link" href="/employee">{{ __('Employee') }}</a>
                                </li>
                            @endif

                            <li class="nav-item">
                                <a class="nav-link" href="{{ Auth::user()->role }}">{{ __('Dashboard') }}</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
</body>
        @yield('script')
</html>
