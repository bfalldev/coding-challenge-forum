<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/vendor/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/vendor/animate.css">

    <script src="../assets/js/vendor/jquery.min.js"></script>
    <script src="../assets/js/vendor/jquery.parallax.js"></script>
    <script src="../assets/js/vendor/wow.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <title>Coding Challenge</title>
    <style>
        a{
            color: blue;
        }
        td{
            color: black;
        }
        .modale{
            padding: 12px;
        }
        .bout{
            /*padding: 25px;*/
        }
        .categorie{
            display: flex;
            flex-flow: row wrap;
            justify-content: space-around;
            margin-top: 1rem;
        }
        .chaq{
            display: flex;
            width: 220px;
            min-width: 320px;
            margin-bottom: 1.5rem;
        }
        .btn-categorie {
            padding: .3rem 2rem;
            border: 1px solid #4c88ef;
            color: black;
            background-color: #5bc0de;
            border-radius: 10px;
        }
        .btn-categorie::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            background: linear-gradient(135deg, #4c88ef 0, #17e4d9 100%); }
        .btn-categorie:hover {
            color: white;
            border-color: blue;
            background-color: blue;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('#add').click(function () {
                $('#form-add').fadeIn('slow');
            });
            $('#poster').click(function () {
                $('#form-add').hide();
            });
        });
    </script>
</head>

<body>
<main class="main">
    <header class="main__header">
        <div class="content">
            <div class="header__logo">
                <a href="../index.html"><img  src="../assets/imgs/cc1.jpg" alt="logo" srcset="" style=" width : 100px; border-radius: 150px;" ></a>
            </div>


            <nav class="header__nav">
                <ul class="nav__link-group">
                    <li>
                        <a href="" class="nav-item">
                            <i class="fab fa-github" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" class="nav-item">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" class="nav-item">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </header>

    <section class="main__container">
        <div class="panel-heading" align="center">

            <strong><BIG>THEME DES FORUMS</BIG></strong>
            <form class="navbar-form  navbar-right form-inline">
                <div class="form-group">
                    <input type="search" class="form-control" placeholder="mettez un par mot clef">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                </div>
            </form>

        </div>
        <hr>
        <div class="categorie tab-pane web">
            <a href="web.php" title="Developpement Web"><div class="chaq btn-categorie">
                <h2>
                    <i class="fa fa-globe" aria-hidden="true"></i>
                    Web
                </h2>
            </div></a>
            <a href="projet.php"><div class="chaq btn-categorie">
                <h2>
                    <i class="fa fa-sticky-note" aria-hidden="true"></i>
                    Gestion de projet
                </h2>
            </div></a>
            <a href="modelisation.php"><div class="chaq btn-categorie">
                <h2>
                    <i class="fas fa-project-diagram" aria-hidden="true"></i>
                    Modélisation
                </h2>
            </div></a>
            <a href="infographie.php"><div class="chaq btn-categorie">
                <h2>
                    <i class="fas fa-paint-brush" aria-hidden="true"></i>
                    Infographie
                </h2>
            </div></a>
            <a href="db.php"><div class="chaq btn-categorie">
                <h2>
                    <i class="fas fa-database" aria-hidden="true"></i>
                    Base de données
                </h2>
            </div></a>
            <a href="design.php"><div class="chaq btn-categorie">
                <h2>
                    <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                    Design
                </h2>
            </div></a>
            <a href="desktop.php"><div class="chaq btn-categorie">
                <h2>
                    <i class="fas fa-code" aria-hidden="true"></i>
                    Desktop
                </h2>
            </div></a>
            <a href="mobile.php"><div class="chaq btn-categorie">
                <h2>
                    <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                    Mobile
                </h2>
            </div></a>
        </div>
        <hr>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading" align="center">
                    <h1>les forum relatives à la gestion des projets</h1>
                </div>
                <div class="panel-body">
                    <table class="table  table-responsive table-striped">
                        <tr>
                            <td>
                                <i class="fas fa-code"></i>
                                Développement<br>
                                <a href="" class="survol">j'ai un un erreur de code : voici code</a>
                            </td>
                            <td>
                                <i class="fas fa-comments"></i>
                                2556 commentaires
                            </td>
                            <td>
                                <i class="fas fa-user"></i>
                                Posté par : <b>Baye Fall</b><br>
                                le 14/08/2018 à 12:58
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <i class="fas fa-sticky-note"></i>
                                Gestion de Projet<br>
                                <a href="">Bon ma question était si on peut utiliser scrum sur un petitprojet</a>
                            </td>
                            <td>
                                <i class="fas fa-comments"></i>
                                155 commentaires
                            </td>
                            <td>
                                <i class="fas fa-user"></i>
                                Posté par : <b>Angel</b><br>
                                le 14/08/2018 à 00:45
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fas fa-pencil-alt"></i>
                                Design<br>
                                <a href="">comment découper un image avec Photoshop</a>
                            </td>
                            <td>
                                <i class="fas fa-comments"></i>
                                26 commentaires
                            </td>
                            <td>
                                <i class="fas fa-user"></i>
                                Posté par : <b>Mouhamed Ndiaye</b><br>
                                le 14/08/2018 à 04:22
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fas fa-code"></i>
                                Développement<br>
                                <a href="">j'ai un un erreur de code : voici code</a>
                            </td>
                            <td>
                                <i class="fas fa-comments"></i>
                                2556 commentaires
                            </td>
                            <td>
                                <i class="fas fa-user"></i>
                                Posté par : <b>Baye Fall</b><br>
                                le 14/08/2018 à 13:25
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <i class="fas fa-sticky-note"></i>
                                Gestion de Projet<br>
                                <a href="">Bon ma question était si on peut utiliser scrum sur un petitprojet</a>
                            </td>
                            <td>
                                <i class="fas fa-comments"></i>
                                155 commentaires
                            </td>
                            <td>
                                <i class="fas fa-user"></i>
                                Posté par : <b>Angel</b><br>
                                le 14/08/2018 à 12:00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fas fa-pencil-alt"></i>
                                Design<br>
                                <a href="">comment découper un image avec Photoshop</a>
                            </td>
                            <td>
                                <i class="fas fa-comments"></i>
                                26 commentaires
                            </td>
                            <td>
                                <i class="fas fa-user"></i>
                                Posté par : <b>Mouhamed Ndiaye</b><br>
                                le 14/08/2018 à 12:58
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fas fa-sticky-note"></i>
                                Gestion de Projet<br>
                                <a href="">Bon ma question était si on peut utiliser scrum sur un petitprojet</a>
                            </td>
                            <td>
                                155 commentaires
                            </td>
                            <td>
                                Posté par : <b>Angel</b><br>
                                le 14/08/2018 à 10:58
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fas fa-pencil-alt"></i>
                                Design<br>
                                <a href="">comment découper un image avec Photoshop</a>
                            </td>
                            <td>
                                <i class="fas fa-comments"></i>
                                42 commentaires
                            </td>
                            <td>
                                <i class="fas fa-user"></i>
                                Posté par : <b>Mouhamed Ndiaye</b><br>
                                le 14/08/2018 à 12:58
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <footer class="main__footer">
        <div class="content">
            <h5>coding challenge</h5>
            <h5>groupe developpeur</h5>
            <h5>coding challenge</h5>
            <h5>groupe developpeur</h5>
            <h5>senegal</h5>
        </div>
        <ul class="nav__link-group">
            <li>
                <a href="" class="nav-item">
                    <i class="fab fa-github" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="" class="nav-item">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
            <li>
                <a href="" class="nav-item">
                    <i class="fab fa-facebook-square"></i>
                </a>
            </li>
            <li>
                <a href="" class="nav-item">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </footer>
</main>

</body>

</html>