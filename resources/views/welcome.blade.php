<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>crudApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <style>
            /* Basic styles for the navigation bar */
            ul.navbar {
                list-style-type: none;
                margin: 0;
                padding: 0;
                background-color: #333;
                overflow: hidden;
            }
    
            li.nav-item {
                float: right;
            }
    
            li.nav-item a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
    
            li.nav-item a:hover {
                background-color: #555;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        

</head>

<body class>

    {{-- <nav class="navbar navbar-inverse">
        <div class="container-fluid"> --}}
          
         
              
          {{-- <ul class="nav navbar-nav navbar-right"> --}}

            @if (Route::has('login'))
                {{-- <div class="  fixed top-0 right-0 px-5 py-4 sm:block"> --}}
                    <ul class="navbar">
                    @auth
                        <a href="{{ url('/') }}" class="nav-item text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                        <a href="{{ route('logout') }}" class="nav-item text-sm text-gray-700 dark:text-gray-500 underline">Logout</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-item text-lg text-gray-700 dark:text-gray-500 underline font-weight-bold">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-item ml-4 text-lg text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                    </ul>
                {{-- </div> --}}
            @endif


            {{-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> --}}
            {{-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> --}}
          {{-- </ul> --}}
        {{-- </div>
      </nav> --}}
        

    <h1 class="text-center text-danger mt-3">Laravel CRUD Operation By Dhruvik</h1>

    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>