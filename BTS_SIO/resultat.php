<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
<link rel="icon" href="img/icon_bts.png" type="image/png">




<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<head>
    <title>Accueil - Le BTS SIO</title>
    <meta charset="UTF-8" />

    <meta name="description" content="Le site internet du BTS SIO">

    <meta name="keywords" content="internet, BTS SIO">

    <meta name="robots" content="noindex, nofollow">


</head>

<body>
    <!------  Menu navigation ------->
    <header>
        <div>
            <div>
                <h1 class="text-3a"><a href="/">Le BTS<span>-SIO</span></a></h1>
                <nav>
                    <ul class="menu">

                        <!---- Accueil --->
                        <li>
                            <a href="index.html">
                                <i class="fa fa-home fa-lg"></i>
                                <span class="nav-text">Accueil</span>
                            </a>
                        </li>

                        <!----------- Galerie ------>
                        <li>
                            <a href="galerie.html">
                                <i class="fa fa-picture-o" aria-hidden="true"></i>
                                <span class="nav-text">Galerie</span>
                            </a>
                        </li>


                        <!--------- Formulaire ------->
                        <li>
                            <a href="formulaire.html">
                                <i class="fa fa-file-text" aria-hidden="true"></i>
                                <span class="nav-text">Inscription</span>

                            </a>

                        </li>

                        <!--------- Contact  ------->
                        <li>
                            <a href="contact.html">
                                <i class="fa fa-info-circle " aria-hidden="true "></i>
                                <span class="nav-text ">Contact</span>

                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="clear "></div>
            </div>
        </div>
    </header>


        <!------ Résultat formulaire ------->
        <div class="article">
        <?php

            // Vérifier si le formulaire est soumis 
            if ( isset( $_POST['submit'] ) ) {
            /* récupérer les données du formulaire en utilisant 
            la valeur des attributs name comme clé 
            */
            $nom = $_POST['nom']; 
            $prenom = $_POST['prenom']; 
            $mail = $_POST['mail']; 
            $dateN = $_POST['dateN']; 
            $tel = $_POST['phone']; 
            $adr = $_POST['adresse']; 
            $ville = $_POST['ville']; 
            $cp = $_POST['CP']; 
            }
        ?>

            <h2>Inscription validé</h2>
            <p>Voici les informations que vous aviez rentrez pour votre inscription.</p>

            <?php
            
                echo 'Nom : '.$nom.'<br>';
                echo 'Prenom : ' .$prenom.'<br>';
                echo 'mail : ' .$mail.'<br>';
                echo 'Date de naissance : ' .$dateN.'<br>';
                echo 'Numéro de téléphone : ' .$tel.'<br>';
                echo 'Adresse  : ' .$adr.'<br>';
                echo 'Ville : ' .$ville.'<br>';
                echo 'Code postal : ' .$cp.'<br>';
            ?>
        </div>

    </body>
</html>