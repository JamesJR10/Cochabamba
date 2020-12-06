<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{'Cochabamba'}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link rel="icon" href="images/Cochabamba2.png" type="image/png" sizes="35x35">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<style>
            .circle{
            top: 85%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            width: 100px;
            height: 100px;
            text-align: center;
            line-height: 110px;
            font-size: 50px;
            overflow: hidden;
        }
        .circle .far{
            color: #007bff!important;
            margin: 0;
            padding: 0;
            animation: animate 1.5s linear infinite;
        }
        @keyframes animate{
            0%{
                transform: translateY(-50px);
                text-shadow: 0 50px 0 #007bff;
            }
            20%{
                transform: translateY(0px);
                text-shadow: 0 10px 0 #007bff;
            }
            40%{
                transform: translateY(0px);
                text-shadow: 0 -10px 0 #007bff;
            }
            60%{
                transform: translateY(0px);
                text-shadow: 0 0px 0 #007bff;
            }
            100%{
                transform: translateY(100px);
                text-shadow: 0 50px 0 #007bff;
            }
        }
        .row2{
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-top: -85px;
        }
        a {
            text-decoration: none;
        }
        .btnT{
                height: 38px;
            }
        .active a {
            color: red;
            text-decoration: none;
        }

        small {
            color: red;
            padding: 5px;

        }

        .btnTable {
            padding: 2.5px 2.5px;
        }

        .wrapper {
            display: flex;
            position: relative;
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .h-screen {
            height: 100vh;
        }

        .container-ciudades {
    width: 100%;
    max-width: 1200px;
    height: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: auto;
    margin-bottom: 80px;
}

.card{
  overflow: hidden;
    margin: 20px;
    width: 350px;
    height: auto;
    overflow: hidden;
}


        @media (min-width: 769px) {
            .navbar{
            height: 80px;
            }
            .btn-block {
                display: inline-block;
                width: auto;
                margin-top: 0rem;
            }
            .btn-block+.btn-block {
                margin-top: 0rem;
            }
            .divTable{
                position: relative;
                margin: auto;
            }
            #list-Autor{
                position: relative;
                margin: auto;
            }
            table{
                position: relative;
                margin: auto;
                width: 100%;
                display: inline-table;
            }
            .table-responsive {
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                display: inline-table;
            }
        }
</style>
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">

    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('partials.nav')
        </header>
        <main>
            @yield('content')
        </main>
        <footer class="bg-white text-center text-black-50 py-3 shadow">
            {{ config('app.name') }} | Copyright @ {{ date('Y') }} Servidores AqM
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
</body>

</html>
