<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Spacesport</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="fonts/icomoon/style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">

</head>
<body>

<div class="login-wrap">
    <div class="login-form">
        <div class="login-img">
            <img src="img/logo-main.svg" alt="Spaceport">
        </div>
        <h1>Spaceport</h1>
        <p>Professional Web</p>
        <form method="post">
            <input type="text" name="email" placeholder="Email" required/>
            <input type="password" name="password" placeholder="Password" required/>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn">Login</button>
        </form>

    </div>
</div>


<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/4.5.9/es5-sham.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script   src="https://code.jquery.com/jquery-2.1.3.min.js"   integrity="sha256-ivk71nXhz9nsyFDoYoGf2sbjrR9ddh+XDkCcfZxjvcM="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>