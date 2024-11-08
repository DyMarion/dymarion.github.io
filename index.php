<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Retrouvez mon cv et mon portfolio de développeuse web!">
    <title>Portfolio - Marion Dy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="/public/assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:200,300,400,500,600,700,800" rel="stylesheet" />
</head>

<body class="theme-1">
    <header>
        <nav class="navbar navbar-expand-lg flex-wrap" role="navigation">
            <div class="container-fluid mx-5 my-2">
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                        <h1 class="navbar-brand fs-1 fw-700 mx-auto">Marion Dy</h1>
                    <div class="d-flex  ms-lg-5">
                        <a class="theme-switch" id="theme-1" title="Thème couleurs 1" role="button"><img src="./public/assets/img/switch1.png" alt="Thème couleurs 1" width="50"></a>
                        <a class="theme-switch" id="theme-2" title="Thème couleurs 2" role="button"><img src="./public/assets/img/switch2.png" alt="Thème couleurs 2" width="50"></a>
                        <a class="theme-switch" id="theme-3" title="Thème couleurs 3" role="button"><img src="./public/assets/img/switch3.png" alt="Thème couleurs 3" width="50"></a>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" role="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-lg-5">
                        <li class="nav-item">
                            <a class="nav-link " id="home">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="about">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="education">Formation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="job">Expérience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="portfolio">Portfolio</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="contact">Contact</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="text-white pt-5">

<!-- ======= ACCUEIL ======= -->
        <section class="section d-flex flex-start mx-3 mx-lg-auto mt-lg-5 p-lg-5 col-lg-8" id="home">
            <div class="mt-5"> 
                <h2 class="welcome fw-normal">Bienvenue</h2> 
            </div>
        </section>

<!-- ======= A PROPOS ======= -->
        <section class="section d-none flex-column align-items-center rounded mx-2 mx-lg-auto p-5 pb-3 col-lg-8" id="about">
            <h2 class="fs-3">Développeuse web fullstack</h2>
            <p class="fst-italic text-center">
                Spécialité de la formation : back-end, PHP/Symfony
            </p>
            <div class="separator"></div>
            <div class="align-items-stretch mt-5">
                <div class="row justify-content-center">
                    <div class="d-flex align-items-center justify-content-center mb-3 col-lg-3">
                        <img src="./public/assets/img/profile-img.jpg" alt="photo Marion" class="img-fluid rounded-circle" width="130">
                    </div>
                    <div class="d-flex align-items-center col-lg-4">
                        <ul class="list-unstyled">
                            <li><i class="bi bi-chevron-right"></i> <strong>Année de naissance :</strong> <span>1990</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Lieu de résidence :</strong> <span>Angers,
                                    France</span></li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center col-lg-4">
                        <ul class="list-unstyled">
                            <li><i class="bi bi-chevron-right"></i> <strong>Disponibilité :</strong> <span>dès à présent
                                </span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Contact :</strong> 
                                <a href="https://www.linkedin.com/in/marion-dy-631545116" title="Lien vers profil Linkedin"><span>via Linkedin</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="about mt-4">Fraîchement sortie de formation mais déterminée à pratiquer le développement autant que possible afin de
                confirmer mes connaissances ete nouvelles, je suis <b>à la recherche d'une expérience
                professionnelle</b> en entreprise : CDD, CDI, ou stage, à Angers ou en remote. Avec la volonté
                d'intégrer l'entreprise par la suite, bien sûr!</p>
                <p class="about">Je suis <b>prête à me former</b> dans les technologies/langages que je ne connais pas encore : n'hésitez
                donc pas à me contacter même si vous ne voyez pas certains de vos critères dans mon CV!
                </p>
            </div>
<!-- COMPETENCES -->
            <div class="separator2"></div>
            <div class="d-flex flex-column rounded mx-2 mx-lg-auto mt-4 mb-4 col-lg-12" id="skills">
                <div class="text-center">
                    <h3 class="fs-3 mb-3 text-center">Compétences</h3>
                    <!-- <p>Technologies utilisées :</p> -->
                </div>
                <div class="d-flex flex-column flex-lg-row gap-3 gap-lg-5 justify-content-center mt-3">
                    <div class="col-10 col-lg-3 mx-auto">
                        <div class="techno">HTML</div>
                        <div class="techno">CSS</div>
                        <div class="techno">PHP</div>
                        <div class="techno">SQL</div>
                        <div class="techno">JavaScript</div>
                        <div class="techno">TypeScript</div>
                    </div>
                    <div class="col-10 col-lg-3 mx-auto"> 
                        <div class="techno">Bootstrap</div>
                        <div class="techno">Symfony</div>
                        <div class="techno">Laravel</div>
                        <div class="techno">React</div>
                        <div class="techno">Node</div>
                        <div class="techno">Express</div>
                    </div>
                    <div class="col-10 col-lg-3 mx-auto">
                        <div class="techno">SGBDR</div>
                        <div class="techno">MariaDB</div>
                        <div class="techno">MongoDB</div>
                        <div class="techno">Prestashop</div>
                        <div class="techno">Wordpress</div>
                    </div>
                </div>
            </div>
        </section>    


<!-- ======= FORMATION ======= -->
        <section class="section d-none flex-column align-items-center rounded mx-2 mx-lg-auto p-5 col-lg-8" id="education">
            <h2 class="fs-3 mb-3">Formation</h2>
            <div class="separator2"></div>
                <div class="align-items-stretch mt-5 text-center">
                    <div class="education-item">
                        <h3 class="fs-5 p-0">Titre Pro de niveau 5 - Développeur Web et Web Mobile</h3>
                        <p class="mb-1"><em>Oct. 2023 - Avr. 2024 // Ecole O'Clock // Spécialisation PHP & Symfony</em></p>
                        <p>Formation intensive axée sur la pratique : HTML/CSS, PHP, Symfony, SQL, JS, Laravel, Github</p>
                    </div>
                    <div class="education-item mt-4">
                        <h3 class="fs-5">Diplôme d'Aptitude à l'Enseignement du Français Langue Étrangère</h3>
                        <p><em>2014-2015 // Alliance Française de Paris // Spécialisation en Technologies de l'Information et de la Communication</em></p>
                    </div>
                    <div class="education-item mt-4">
                        <h3 class="fs-5">Etudes de Lettres Modernes (M1)</h3>
                        <p><em>2008-2013 // Sorbonne Nouvelle // Mémoire : La crise du langage dans "La Pluie d'Eté" et "L'Eté 80" de M. Duras</em></p>
                    </div>
                </div>
            <h3 class="fs-4 mt-5 mb-3 text-center">Formations complémentaires</h3>
            <div class="separator"></div>
            <div class="mt-4 col-lg-8 text-center">
                <p>"Les data sciences de A à Z" (Udemy, 19.5h - mars 2021)</p>
                <p>"Enseigner avec Moodle", "Enseigner l'intercompréhension en langues romanes", "Nouvelles
                    méthodologies d'apprentissage du français"</p>
            </div>
        </section>


<!-- ======= EXPERIENCE ======= -->
        <div class="section d-none flex-column align-items-center rounded mx-2 mx-lg-auto p-5 col-lg-8" id="job">
            <h2 class="fs-3 mb-3">Expérience professionnelle</h2>
            <div class="separator"></div>
            <div class="mt-5">
                <div class="job-item">
                    <h3 class="fs-5 p-0 text-center">Stagiaire développeuse web</h3>
                    <p class="mb-4 text-center"><em>Août 2024 - Oct. 2024 // Andragogy, Remote</em></p>
                    <ul class="list-unstyled">
                        <li class="pb-2 pb-lg-1"><i class="bi bi-check2-circle"></i>Développement d'outils internes en stack MERN : aides aux inscriptions et au suivi des étudiants et parcours </li>
                        <li class="pb-2 pb-lg-1"><i class="bi bi-check2-circle"></i>Rédaction de contenu pédagogique assistée par IA, relecture de cours</li>
                    </ul>
                </div>
                <div class="separator2 mt-5 mb-5"></div>
                <div class="job-item">
                    <h3 class="fs-5 p-0 text-center">Assistante de direction &amp; assistante chef de projet</h3>
                    <p class="mb-4 text-center"><em>Janv. 2018 - Sept. 2023 // Expo-Dispo Solutions Entreprises, Essonne</em></p>
                    <ul class="list-unstyled">
                        <li class="pb-2 pb-lg-1"><i class="bi bi-check2-circle"></i>Missions administratives diverses : archivage, suivi comptable et RH simple, recrutement, facturation,
                            dossiers administratifs (R&D, demandes de subvention, documents contractuels...)</li>
                        <li class="pb-2 pb-lg-1"><i class="bi bi-check2-circle"></i>Missions liées au e-commerce : suivi des commandes, du service client, suivi des flux et des
                            marketplaces, du CMS (Prestashop)</li>
                        <li><i class="bi bi-check2-circle"></i>Missions liées à l'approvisionnement produits et aux ventes BtoB : suivi des imports, conformité
                            produit et normes douanières, relations avec les usines et les clients (grande distribution), participation à l'organisation logistique et des processus internes</li>
                    </ul>
                </div>
                <div class="separator2 mt-5"></div>
                <div class="job-item">
                    <h3 class="fs-5 p-0 mt-5 text-center">Professeur de français langue étrangère</h3>
                    <p class="mb-4 text-center"><em>2014-2017 // France, Italie, République Tchèque</em></p>
                    <ul class="list-unstyled">
                        <li class="pb-2 pb-lg-1"><i class="bi bi-check2-circle"></i>Enseignement auprès de jeunes et d'adultes, en groupe ou cours individuels, préparation aux
                            examens, alphabétisation, enseignement à visée professionnelle ou récréative</li>
                        <li><i class="bi bi-check2-circle"></i>Observation, assistanat, recrutement, recherche de partenariats, organisation d'exposition
                            (Alliance française)</li>
                    </ul>
                </div>
            </div>    
        </div>


<!-- ======= PORTFOLIO ======= -->
        <div class="section d-none flex-column align-items-center rounded mx-2 mx-lg-4 mx-xl-auto pt-5 p-2 p-lg-5 col-xl-8" id="portfolio">
            <h2 class="fs-3 mb-3">Portfolio</h2>
            <div class="separator2"></div>
            <div class="box d-flex justify-content-center flex-wrap mx-auto mt-5 p-2">
                
                <div class="project col-8 col-lg-7 col-xl-5" id="omybeer">
                    <a class="text-decoration-none project-link" href="https://www.omybeer.ovh/" title="Lien vers le site O'My Beer" target="_blank">
                        <div class="corner"></div>
                        <div class="box-title">O'My Beer!</div>
                        <div class="box-description">
                            <span>Site dédié à l'univers brassicole</span>
                            <p>Projet de fin de formation réalisé en équipe : découvrez et donnez votre avis sur des bières du monde entier!</p>
                            <p>Front-office, back-office, API externe et fixtures</p>
                            <p class="my-2"><I>PHP 8, Symfony 7, MySQL/MariaDB, JS Vanilla, HTML, CSS, SASS, Bootstrap</I></p>
                            <span class="fs-6">Cliquez pour découvrir</span>
                        </div>
                    </a>
                </div>

                <div class="project col-8 col-lg-7 col-xl-5" id="trobot">
                    <a class="text-decoration-none project-link" href="https://www.mariondev.fr/trobot" title="Lien vers le projet TRobot" target="_blank">
                        <div class="corner"></div>
                        <div class="box-title">TRobot</div>
                        <div class="box-description">
                            <span>Mini application fun d'encodage de mots</span>
                            <p>Vous avez toujours rêvé d'écrire votre prénom en binaire, morse, runique ou Vigénère? TRobot le fait pour vous!</p>
                            <p class="my-2"><I>PHP 8, JS Vanilla, HTML, CSS</I></p>
                            <span class="fs-6">Cliquez pour découvrir</span>
                        </div>
                    </a>
                </div>

                <div class="project col-8 col-lg-7 col-xl-5" id="enstock">
                    <a class="text-decoration-none project-link" href="./templates/presentation_enstock.php" title="Lien vers la présentation d'En stock!">
                        <div class="corner"></div>
                        <div class="box-title">En stock!</div>
                        <div class="box-description">
                            <span>Gestionnaire de stock</span>
                            <p>Conçu pour une gestion optimale de stock, permet de gérer facilement les entrées et les sorties de produits, ainsi que les références, catégories, emplacements, etc.</p>
                            <p class="my-2"><I>PHP 8, Symfony 7, MySQL/MariaDB, JS Vanilla, HTML, CSS, Bootstrap</I></p>
                            <span class="fs-6">Cliquez pour découvrir</span>
                        </div>
                    </a>
                </div>

                <div class="project col-8 col-lg-7 col-xl-5" id="bakery">
                    <a class="text-decoration-none project-link" href="https://www.mariondev.fr/bakery" title="Lien vers le projet Bakery" target="_blank">
                        <div class="corner"></div>
                        <div class="box-title">Bakery</div>
                        <div class="box-description">
                            <span>Site vitrine fictif</span>
                            <p>Site vitrine d'une boulangerie fictive. Le but ? Apprendre React !</p>
                            <p class="my-2"><I>React, JS, CSS</I></p>
                            <span class="fs-6">Cliquez pour découvrir</span>
                        </div>
                    </a>
                </div>

            </div>
        </div>

        <!-- <p class="credits">&#169; Copyright 2024 Marion Dy</p> -->
    </main>

    <!-- <footer>
        <p>&#169; Copyright 2024 Marion Dy</p>
    </footer> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script type="module" src="public/assets/js/app.js"></script>
</body>

</html>
