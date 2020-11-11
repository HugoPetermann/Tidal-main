<!DOCTYPE html>
<html lang="fr">
<head>
        <title>PixyJob</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="shortcut icon" href="/web/images/favicon.ico" />

        <!-- On importe jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

        

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        

        <!--<link rel="stylesheet" href="/SiteTidal/web/css/style.css" type="text/css">-->
        
        <style> 
        .jumbotron{
      background-image:url({$ImageFond});
    }
    </style>

</head>
<body>
<div>

        <!-- Barre de navigation -->
        <nav class="navbar navbar-dark bg-dark fixed-top ">
        <h1 class="navbar-brand" href="views/index.html">MicroMagouille</h1>

        <ul class="nav">
            <li class="nav nav-pills">
                <a class="nav-link active " href="/">ACCUEIL</a>
            </li>
            <li class="nav nav-pills">
              <a class="nav-link text-white" href="./controllers/panier.php">PANIER</a>
            </li>                
            <li class="nav nav-pills">
                <a class="nav-link text-white" href="./controllers/inscription.php">INSCRIPTION</a>
            </li>
            <li class="nav nav-pills">
                <a class="nav-link text-white" href="./controllers/connexion.php">CONNEXION</a>
            </li>
        </ul>
    </nav>


        <div  id="jumbotron" class="jumbotron text-center text-white">
                <h1>MicroMagouille</h1> 
                <p>Toutes les dernieres nouveautés informatiques sont là !</p> 
                <div class="container h-100">
                        <div class="d-flex justify-content-center h-100">
                                <div class="searchbar">
                                        <input class="search_input" type="text" name="" placeholder="Que recherchez-vous?">
                                        <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                                </div>
                        </div>
                </div>
        </div>



<!--
        <div id="HeaderFont">
                
                <img src={$ImageFond} alt="Banderole Du Site Web">
                <div id="NavigationButton">
                       <ul>
                                <li><a href="./index.php">ACCUEIL</li>
                                <li><a href="./controllers/panier.php">PANIER</li>
                                <li><a href="./controllers/inscription.php">INSCRIPTION</li>
                                <li><a href="./controllers/connexion.php">CONNEXION</li>
                        </ul>
                </div>
        </div>

-->

</div>