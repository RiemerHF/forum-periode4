<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Eindproject Forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous">
    <link rel=stylesheet href="css/forum.css">
    <link rel=stylesheet href="css/loginstyle.css">
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
        <form class="boxCF" action="#" method="post">
            <h1>Aanmelden</h1>
            <input type="name" name="user-username" placeholder="Username">
            <input type="email" name="user-mail" placeholder="E-mail">
            <input type="password" name="user-password" placeholder="Wachtwoord">
            <input type="submit" name="login" value="Aanmelden">
            <hr/>
            <p>Heeft u al een account? U kunt <a href="inloggen">hier</a> inloggen</p>
        </form>
    </div>

<script src="js/tes.js"
</body>
</html>

