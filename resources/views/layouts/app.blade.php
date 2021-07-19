<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Fiction Limbo | Admin</title>
    <link rel="stylesheet" href={{ url('css/font-awesome.min.css') }}>
    <link rel="stylesheet" href={{ url('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ url('css/style.css') }}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
</head>

<body class="fl-admin">

    <nav class="navbar navbar-expand-lg admin-nav fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img src={{ url('img/admin-logo.svg') }}></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">

                        @if (Request::url() != url('/'))
                            <a class="nav-link" href="signin.html">Welcome, Admin</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('main-content')
    <script src={{ url('js/jquery.min.js') }}></script>
    <script src={{ url('js/popper.min.js') }}></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

    <script>
        const showSubMenu = () => {
            let icon = '<i class="fa fa-chevron-up"></i>'
            $('#toggle-submenu').html(icon).attr('onclick', 'hideSubMenu()');
            $('#subMenuItem').slideDown();
        }

        const hideSubMenu = () => {
            let icon = '<i class="fa fa-chevron-right"></i>'
            $('#toggle-submenu').html(icon).attr('onclick', 'showSubMenu()');
            $('#subMenuItem').slideUp();
        }
    </script>

</body>

</html>
