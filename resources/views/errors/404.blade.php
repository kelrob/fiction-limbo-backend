<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiction Limbo | Admin</title>
    <link rel="stylesheet" href={{ url('css/font-awesome.min.css') }}>
    <link rel="stylesheet" href={{ url('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ url('css/style.css') }}>
    <link rel="stylesheet" href={{ url('css/animation.css') }}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<!-- Firefly Animation-->
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>


<body class="fl-admin-error">

    <nav class="navbar navbar-expand-lg admin-nav fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img src="../img/admin-logo.svg"></a>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">

                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section id="admin-404">
        <div class="container-fluid">
            <div class="row align-items-center roww">
                <div class="col-lg-4 offset-lg-4">
                    <div class="admin-404-wrapper">
                        <h1>You Are Lost!</h1>
                        <p>Beneath these waters, <br>
                            darkness holds sway, make haste and seek the light, <br>
                            lest you be caught wanting, in lands uncharted.
                        </p>
                    </div>
                    <div class="button-center">
                        <form action="{{ url('/') }}" method="POST">
                            <button type="submit">Get back to the ship</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script src={{ url('js/jquery.min.js') }}></script>
    <script src={{ url('js/popper.min.js') }}></script>
    <script src={{ url('js/bootstrap.min.js') }}></script>
    <script src={{ url('js/animation.js') }}></script>

</body>

</html>
