<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Eindproject Forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous">
    <style>
        #login {
            position: absolute;
            right: 11%;
        }

        #aanmelden {
            position: absolute;
            right: 2%;
        }


        .navbar {
            color: #202225;
            border: 1px solid black;
            width: 100%;
        }

        .navbar {
            text-align: center;
            color: white;
            text-decoration: none;
            width: 100%;
            background: #2c2f33;
        }



        body{
            margin-top:20px;
            color: #2c2f33;
            text-align: left;
            background-color: #23272a;
        }

        .inner-wrapper {
            position: relative;
            height: calc(100vh - 3.5rem);
            transition: transform 0.3s;
        }
        @media (min-width: 992px) {
            .sticky-navbar .inner-wrapper {
                height: calc(100vh - 3.5rem - 48px);
            }
        }

        .inner-main,
        .inner-sidebar {
            position: absolute;
            top: 0;
            bottom: 0;
            display: flex;
            flex-direction: column;
        }
        .inner-sidebar {
            left: 0;
            width: 235px;
            border-right: 1px solid #23272a;
            background-color: #2c2f33;
            z-index: 1;
        }
        .inner-main {
            right: 0;
            left: 235px;
        }
        .inner-main-footer,
        .inner-main-header,
        .inner-sidebar-footer,
        .inner-sidebar-header {
            height: 3.5rem;
            border-bottom: 1px solid #cbd5e0;
            display: flex;
            align-items: center;
            padding: 0 1rem;
            flex-shrink: 0;
        }
        .inner-main-body,
        .inner-sidebar-body {
            padding: 1rem;
            overflow-y: auto;
            position: relative;
            flex: 1 1 auto;
        }
        .inner-main-body .sticky-top,
        .inner-sidebar-body .sticky-top {
            z-index: 999;
        }
        .inner-main-footer,
        .inner-main-header {
            background-color: #fff;
        }
        .inner-main-footer,
        .inner-sidebar-footer {
            border-top: 1px solid #cbd5e0;
            border-bottom: 0;
            height: auto;
            min-height: 3.5rem;
        }
        @media (max-width: 767.98px) {
            .inner-sidebar {
                left: -235px;
            }
            .inner-main {
                left: 0;
            }
            .inner-expand .main-body {
                overflow: hidden;
            }
            .inner-expand .inner-wrapper {
                transform: translate3d(235px, 0, 0);
            }
        }

        .nav .show>.nav-link.nav-link-faded, .nav-link.nav-link-faded.active, .nav-link.nav-link-faded:active, .nav-pills .nav-link.nav-link-faded.active, .navbar-nav .show>.nav-link.nav-link-faded {
            color: #3367b5;
            background-color: #c9d8f0;
        }

        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #467bcb;
        }
        .nav-link.has-icon {
            display: flex;
            align-items: center;
        }
        .nav-link.active {
            color: #467bcb;
        }
        .nav-pills .nav-link {
            border-radius: .25rem;
        }
        .nav-link {
            color: #4a5568;
        }
        .card {
            box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #36393F;;
            background-clip: border-box;
            border: 0 solid rgba(0,0,0,.125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .text-white{
            color: white;
        }
    </style>
    <style>


        .boxCF{
            height: 72%;
            width: 25%;
            min-width: 400px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #2c2f33;
            text-align: center;
            border-radius: 24px;
        }

        .boxCF h1{
            color: white;
            text-transform: uppercase;
            font-weight: 500;
        }

        .boxCF p{
            color: gray;
            font-weight: 20;
        }

        .boxCF input[type = "name"],.boxCF input[type = "email"]{
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #99aab5;
            padding: 14px 10px;
            width: 90%;
            outline: none;
            color: white;
            border-radius: 15px;
        }

        .boxCF input[type = "password"]{
            background: none;
            display: block;
            margin: 10px auto;
            text-align: center;
            border: 2px solid #99aab5;
            padding: 14px 10px;
            width: 90%;
            outline: none;
            color: white;
            border-radius: 15px;
        }

        .boxCF input[type = "name"]:focus,.boxCF input[type = "password"]:focus,.boxCF input[type = "email"]:focus{
            border-color: #7289da;
        }

        .boxCF input[type = "submit"]{
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #99aab5;
            padding: 14px 40px;
            outline: none;
            color: gray;
            border-radius: 15px;
            cursor: pointer;
        }

        .boxCF input[type = "submit"]:hover{
            border-color: #7289da;
            background: #7289da;
        }

        .boxCF button[type = "gen-passwd"]{
            background: none;
            display: block;
            margin: 5px auto;
            text-align: center;
            border: 2px solid #99aab5;
            padding: 3px 10px;
            width: 50%;
            outline: none;
            color: gray;
            border-radius: 15px;
            cursor: pointer;
        }


        .boxCF button[type = "gen-passwd"]:hover{
            border-color: #7289da;
            background: #7289da;
        }</style>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="/">Forum</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <a href="inloggen" id="login" class="btn btn-secondary " role="button" aria-pressed="true">Login</a>
            <a href="aanmelden" id="aanmelden" class="btn btn-secondary " role="button" aria-pressed="true">Aanmelden</a>
        </div>
    </nav>

</header>
<body>
    <div id="content" class="p-4 p-md-5 pt-5">
        <form class="boxCF" action="/login-user" method="POST">
            @csrf
            <h1>Inloggen</h1>
            <input type="name" name="user-username" placeholder="Username">
            <input type="password" name="user-password" placeholder="Wachtwoord">
            <input type="submit" name="login" value="Inloggen">
            <hr/>
            <p>Heeft u nog geen account? U kunt zich <a href="aanmelden">hier</a> aanmelden</p>
        </form>
    </div>
</body>
</html>
