<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CFA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/connexion.css">


</head>

<body>



    <div class="container4">
    <div class="col-12 zone_retour">
        <a href="index.php">
            <img class="fleche_retour" src="img/icon-gauche.png" alt="fleche_retour" />
    </div></a>
        <h3 class="demarrer">Démarrer</h3>
        <svg class="home" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2.93 3.43">
            <defs>
                <style>
                    .cls-1 {
                        fill: #4cbfdd;
                        fill-rule: evenodd;
                    }
                </style>
            </defs>
            <title>Fichier 1</title>
            <g id="Calque_2" data-name="Calque 2">
                <g id="Calque_1-2" data-name="Calque 1">
                    <path class="cls-1"
                        d="M1.46,3.43H.08C0,3.43,0,3.42,0,3.36V1.42a.09.09,0,0,1,0-.06L.59.81,1.24.19,1.41,0a.07.07,0,0,1,.11,0l.6.58.51.5.28.26a.08.08,0,0,1,0,.07V3.35c0,.06,0,.08-.08.08Zm0-3.28h0L1,.57l-.89.85s0,0,0,0V3.28s0,0,0,0H2.8V1.47s0,0,0,0l-.34-.32L2.07.74,1.67.35Z" />
                </g>
            </g>
        </svg>
        <h3 class="connect"> Connecter vous à votre espace</h3>

        <form action="dbconnexion.php" method="POST">
            <input type="text" placeholder="Email" name="email" class="email" required>
            <input type="password" placeholder="Mot de passe" name="mdp" class="password" required>
            <button class="button" type="submit"name="submitconnexion" value="Envoyé"><object ...><svg class="arrow" height="70px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4.75 4.75">
            <defs>
                <style>
                    .cls-100,
                    .cls-300 {
                        fill: #fff;
                    }

                    .cls-200 {
                        fill: #4cbfdd;
                        opacity: 0.6;
                    }

                    .cls-300 {
                        stroke: #4cbfdd;
                        stroke-miterlimit: 10;
                        stroke-width: 0.1px;
                    }
                </style>
            </defs>
            <title></title>
            <g id="Calque_2" data-name="Calque 2">
                <g id="Calque_1-2" data-name="Calque 1">
                    <path class="cls-100" d="M3.9,2.38A1.53,1.53,0,1,1,2.38.85,1.52,1.52,0,0,1,3.9,2.38Z" />
                    <circle class="cls-200" cx="2.38" cy="2.38" r="2.38" />
                    <path class="cls-300"
                        d="M2.6,1.65l.79.74-.79.74-.17-.22.41-.37s0,0-.06,0H1.36v-.3H2.81L2.4,1.88Z" />
                </g>
            </g>
        </svg></button></<button>
    </form>

        
        
        
        <!--<div class="boutonfleche1">
            <a href="atelier1.php">
                <svg class="arrow"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4.75 4.75">
                    <defs>
                        <style>
                            .cls-100,
                            .cls-300 {
                                fill: #fff;
                            }

                            .cls-200 {
                                fill: #4cbfdd;
                                opacity: 0.6;
                            }

                            .cls-300 {
                                stroke: #4cbfdd;
                                stroke-miterlimit: 10;
                                stroke-width: 0.1px;
                            }
                        </style>
                    </defs>
                    <title>Fichier 2</title>
                    <g id="Calque_2" data-name="Calque 2">
                        <g id="Calque_1-2" data-name="Calque 1">
                            <path class="cls-100" d="M3.9,2.38A1.53,1.53,0,1,1,2.38.85,1.52,1.52,0,0,1,3.9,2.38Z" />
                            <circle class="cls-200" cx="2.38" cy="2.38" r="2.38" />
                            <path class="cls-300"
                                d="M2.6,1.65l.79.74-.79.74-.17-.22.41-.37s0,0-.06,0H1.36v-.3H2.81L2.4,1.88Z" />
                        </g>
                    </g>
                </svg>

            </a>
        </div>
    </div>-->



    



</body>

</html>

