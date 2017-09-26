<?php
/**
 * Created by PhpStorm.
 * User: Gun
 * Date: 15/09/2017
 * Time: 15:15
 */
require "../App/Classes/Manager/bdd.php";

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 21px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="img/paris.jpg" alt="First slide"  style= "height: 590px" width="100%" >
            <div class="container">
                <div class="carousel-caption">
                    <h1>Example headline.</h1>
                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="img/Londres.jpg" alt="Second slide" style= "height: 590px" width="100%">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="img/new-york.jpg" alt="Third slide"  style= "height: 590px" width="100%">
            <div class="container">
                <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">

                <form role="form" class="dvd_form_login well" action="inscription.php" method="post">
                    <fieldset>
                        <legend>S'inscrire</legend>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Votre email">
                        </div>
                        <div class="form-group">
                            <label >Mot de passe</label>
                            <input type="password" name="mdp" class="form-control" placeholder="Mot de passe">
                        </div>
                        <div class="form-group">
                            <label >Confirmation du mot de passe</label>
                            <input type="password" name="confirm_mdp" class="form-control" placeholder="Confirmation mot de passe">
                        </div>
                        <div class="form-group">
                            <label >Nom</label>
                            <input type="text" name="nom" class="form-control" placeholder="Votre nom">
                        </div>
                        <div class="form-group">
                            <label>Prénom</label>
                            <input type="text" name="prenom" class="form-control" placeholder="Votre prénom">
                        </div>

                        <button type="submit" class="btn btn-warning pull-right">S'inscrire</button>
                    </fieldset>
                </form>
            </div>
        </div>

    </div>
</div>

</body>
</html>
