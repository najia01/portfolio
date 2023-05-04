<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon portfolio</title>
    <link rel="shortcut icon" href="./img/portfolio.png" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&family=Quattrocento+Sans&family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- *******************************************************BARRE DE NAVIGATION********************************************************************* -->

    <nav id="menuBar">

        <ul class="nav-menu">
            <li class="nav-item">
                <a href="#home">
                    <span>Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#about">
                    <span>A propos</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#skills">
                    <span>Compétences</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#portfolio">
                    <span>Projets</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#contact-me">
                    <span>Contact</span>
                </a>
            </li>

        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>

    <!-- *******************************************************END BARRE DE NAVIGATION********************************************************************* -->

    <!-- ***************************************************************TITRE ANIME************************************************************************************* -->

    <main>
        <section class="bg-img">
            <div class="row-limit-size">
                <div class="container" id="home">
                    <h1 class="name">Bonjour je m'appelle Najia, <br>
                        je suis <span class="autochange"> </span>
                    </h1>

                    <div class="btn-cv">
                        <a href="doc/cv najia.pdf" download>
                            <button id="cv-btn">Téléchargez CV</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- <hr> -->

        <!-- ***********************************************************END TITRE H1************************************************************************** -->

        <!-- ***********************************************************SECTION ABOUT************************************************************************ -->

        <section class="about-me" id="about">

            <div class="row-limit-size najia">

                <h2 class="me">A propos de moi</h2>

                <div class="container-about">

                    <div class="right-about">

                        <article>
                            <img class="moi" src="img/najia.png" alt="Najia">
                            <h2 class="family-name">Najia LIGALI</h2>
                            <p class="work">Développeuse Web</p>
                        </article>

                    </div>

                    <div class="left-about">

                        <p> Après plusieurs années d'études avec l'obtention d'une licence en histoire-géographie , puis par la suite un diplôme de Technicienne d'Assistance Informatique, mon envie 
                            d'évoluer m'a conduite à entreprendre une reconversion professionnelle dans un domaine alliant passion et créativité: le Développement Web.
                            La réalisation d'une formation en développement web fullstack et applications mobiles dans le centre de formation Online FormaPro durant une année m'a permise de mener à terme mon projet professionnel.
                        </p>

                    </div>

                    <div class="btn-cv">

                        <a href="doc/cv najia.pdf" download>
                            <button id="cv-btn">Téléchargez CV</button>
                        </a>

                    </div>
                </div>
            </div>

        </section>

        <hr>

        <!-- ************************************************************END SECTION ABOUT ********************************************************************* -->

        <!-- ************************************************************SECTION COMPETENCES *************************************************************** -->

        <section class="competence" id="skills">

            <div class="row-limit-size competences">

                <h1 class="skill">Mes compétences</h1>

                <div class="container1">

                    <div class="card">

                        <div class="face face1">
                            <div class="content">
                                <div class="icon">
                                    <i class="fa-brands fa-html5"></i>
                                </div>
                            </div>
                        </div>

                        <div class="face face2">
                            <div class="content">

                                <p> Langage FRONT-END <br>
                                    Connaissance en HTML 5</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">

                        <div class="face face1">
                            <div class="content">
                                <div class="icon">
                                    <i class="fa-brands fa-css3"></i>
                                </div>
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <p> Langage FRONT-END <br>
                                    Connaissance en CSS3</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">

                        <div class="face face1">
                            <div class="content">
                                <div class="icon">
                                    <i class="fa-brands fa-sass "></i>
                                </div>
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <p> Langage FRONT-END <br>
                                    Connaissance en SASS</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">

                        <div class="face face1">
                            <div class="content">
                                <div class="icon">
                                    <i class="fa-brands fa-js"></i>
                                </div>
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <p> Langage FRONT-END <br>
                                    Connaissance en Javascript</p>

                            </div>
                        </div>
                    </div>

                    <div class="card">

                        <div class="face face1">

                            <div class="content">
                                <div class="icon">
                                    <i class="fa-brands fa-php"></i>
                                </div>
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content">

                                <p> Langage BACK-END <br>
                                    Connaissance en PHP</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">

                        <div class="face face1">

                            <div class="content">
                                <div class="icon">
                                    <i class="fa-solid fa-database"></i>
                                </div>
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content">

                                <p> Langage BACK-END <br>
                                    Connaissance en Mysql</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <hr>

        <!-- ******************************************************END SECTION COMPETENCES*************************************************************** -->

        <!-- ********************************************************SECTION PORTFOLIO********************************************************************* -->

        <section class="projets" id="portfolio">

            <h1 id="title-sec3">Mon portfolio</h1>

            <div class="row-limit-size">

                <div class="blog-wrapper">

                    <div class="blog-card">
                        <div class="card-img"><img class="card-in" src="./img/img-ims.png" alt="site one page ims-beauty">
                            <h3>IMS BEAUTY</h3>
                        </div>

                        <div class="card-text">
                            <p>Premier site One Page d'un institut de beauté réalisé en formation .</p>
                        </div>
                        <div class="see">
                            <a href="http://imsbeauty/index1.html" target="_blank">Voir</a>
                        </div>
                    </div>

                    <div class="blog-card">
                        <div class="card-img"><img class="card-in" src="./img/img-jadoo.png" alt="site jadoo">
                            <h3>JADOO</h3>
                        </div>

                        <div class="card-text">
                            <p>Site Jadoo, restauration japonaise, réalisé par le biais de la plateforme d'Online
                                FormaPro afin de valider les modules HTML et CSS.</p>
                        </div>
                        <div class="see">
                            <a href="http://jadoo/" target="_blank">Voir</a>
                        </div>
                    </div>

                    <div class="blog-card">
                        <div class="card-img"><img class="card-in" src="./img/img-bouquine.png" alt="site de bibliothèque bouquine">
                            <h3>BOUQUINE</h3>
                        </div>

                        <div class="card-text">
                            <p>Site de bibliothèque avec réservation en ligne possible réalisé en projet de groupe,
                                réalisation du front-end user.</p>
                        </div>
                        <div class="see">
                            <a href="http://bouquine/front/accueil.php" target="_blank">Voir</a>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <hr>

        <!-- ******************************************************END SECTION PORTFOLIO********************************************************************* -->

        <!-- **********************************************************SECTION CONTACT ************************************************************************* -->

        <section class="contact" id="contact-me">

            <h1 class="my-contact">Contact</h1>
            <div class="row-limit-size contact">

                <h3 id="form">Formulaire de contact</h3>

                <div class="container2">

                    <?php

                    if (isset($_POST['submit'])) {

                        // on récupère les données du formulaire

                        $nom = $_POST['name'];
                        $subject = $_POST['objet'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];

                        // notre email 

                        $to = "validress@outlook.fr";

                        // sujet du message

                        $subject = "Message de contact depuis votre site web";

                        // message 

                        $body = "Nom: $nom\Subject: $subject\Email: $email\Message: $message";

                        // envoi du mail

                        if (mail($to, $subject, $body)) {
                            echo "Votre message a bien été envoyé";
                        } else {
                            echo "Une erreur est survenue lors de l'envoi de votre message.";
                        }
                    }
                    ?>

                    <form action="#" method="post">

                        <label for="name">Nom & Prénom</label>
                        <input type="text" id="name" name="name" placeholder="Votre nom et prénom" required>

                        <label for="sujet">Objet</label>
                        <input type="text" id="objet" name="objet" placeholder="L'objet de votre message">

                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="Votre email" required>

                        <label for="subject">Message</label>
                        <textarea id="subject" name="message" placeholder="Votre message" required></textarea>

                        <input type="submit" name="submit" value="Envoyer">

                    </form>
                </div>
            </div>

        </section>

    </main>
    <!-- ********************************************************END SECTION CONTACT ********************************************************************** -->

    <!-- *************************************************************FOOTER********************************************************************************* -->

    <footer>

        <div class="footer-content">

            <h3 class="footer-title">Port<span class="color">folio</span></h3>

            <div class="links">
                <a href="https://github.com/najia01?tab=repositories" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/login/fr?fromSignIn=true&trk=guest_homepage-basic_nav-header-signin" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>

        <div class="copyright">
            <p id="copy">Copyright&copy;2023 Ligali Najia </p>
        </div>

    </footer>


    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
    <script src="./main.js"></script>

</body>

</html>