<!DOCTYPE html>
<?php
$curent = $_SERVER['REQUEST_URI'];
$canonicalURL = "https://autoskolakobac.rs" . $curent;
?>
<html lang="sr">

    <head>
        <title>
            <?php
            if ($curent == '/index.php' || $curent == '/' || $curent == '/index') {
                echo 'Auto škola Kobac | Vozačke Dozvole A i B Kategorije | Novi Beograd';
            } else if ($curent == '/o-nama.php' || $curent == '/o-nama') {
                echo 'Upoznajte Tim | Auto škola Kobac | Novi Beograd';
            } else if ($curent == '/obuka.php' || $curent == '/obuka') {
                echo 'Obuka za A i B Kategorije | Auto škola Kobac | Novi Beograd';
            } else if ($curent == '/novi-testovi.php' || $curent == '/novi-testovi') {
                echo 'Najnoviji Teorijski Testovi | Auto škola Kobac | Novi Beograd';
            } else if ($curent == '/ispitni-zadaci-prakticnog-ispita.php' || $curent == '/ispitni-zadaci-prakticnog-ispita') {
                echo 'Praktični Ispit Zadaci za B i A Kategorije | Auto škola Kobac | Novi Beograd';
            } else if ($curent == '/saobracajni-znaci.php' || $curent == '/saobracajni-znaci') {
                echo 'Saobraćajni Znaci - Teorijska Priprema | Auto škola Kobac | Novi Beograd';
            } else if ($curent == '/vozni-park.php' || $curent == '/vozni-park') {
                echo 'Vozni Park - Moderna Vozila za Obuku | Auto škola Kobac | Novi Beograd';
            } else if ($curent == '/kontakt.php' || $curent == '/kontakt') {
                echo 'Kontaktirajte Nas | Auto škola Kobac | Novi Beograd';
            } else if ($curent == '/cenovnik.php' || $curent == '/cenovnik') {
                echo 'Cenovnik | Auto škola Kobac | Novi Beograd';
            } else {
                echo 'AUTO ŠKOLA | KOBAC';
            }
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Milos Andan|milos.andan996@gmail.com">
        <meta name="description" content="
        <?php
        if ($curent == '/index.php' || $curent == '/' || $curent == '/index') {
            echo 'Sa nama do vozačke dozvole brzo, lako i sigurno! Nudimo obuku za A i B kategorije uz upotrebu novih, klimatizovanih vozila. ';
        } else if ($curent == '/o-nama.php' || $curent == '/o-nama') {
            echo 'Upoznajte Auto školu Kobac na Novom Beogradu, licenciranu školu sa iskusnim timom posvećenim vašem uspehu. Nudimo obuku za A i B kategorije, koristeći nova, klimatizovana vozila.';
        } else if ($curent == '/obuka.php' || $curent == '/obuka') {
            echo 'Otkrijte sveobuhvatne programe obuke u Auto školi Kobac za kategorije A1, A2, A, i B. Nudimo prilagođenu obuku sa novim, klimatizovanim vozilima i iskusnim instruktorima na Novom Beogradu. Pridružite nam se i korak ste bliže vozačkoj dozvoli.';
        } else if ($curent == '/novi-testovi.php' || $curent == '/novi-testovi') {
            echo 'Ostanite ažurirani sa najnovijim testovima za teorijski deo vozačkog ispita u Auto školi Kobac. Preuzmite aktuelna ispitna pitanja i spremite se efikasno uz naše resurse i savete.';
        } else if ($curent == '/ispitni-zadaci-prakticnog-ispita.php' || $curent == '/ispitni-zadaci-prakticnog-ispita') {
            echo 'Preuzmite i pripremite se za ispitne zadatke praktičnog ispita za B i A kategorije sa Auto školom Kobac. Naši detaljni vodiči i saveti pomoći će vam da uspešno savladate sve izazove i korak ste bliže vozačkoj dozvoli. Posetite nas na Novom Beogradu.';
        } else if ($curent == '/saobracajni-znaci.php' || $curent == '/saobracajni-znaci') {
            echo 'Ovladajte znanjem o saobraćajnim znacima uz Auto školu Kobac. Naša stranica nudi detaljne informacije o znakovima opasnosti, izričitih naredbi i obaveštenja, ključnim za bezbednu vožnju. ';
        } else if ($curent == '/vozni-park.php' || $curent == '/vozni-park') {
            echo 'Upoznajte vozni park Auto škole Kobac: od modernih, klimatizovanih vozila za B kategoriju do motocikala za A1, A2, i A kategorije. Pridružite nam se za obuku na najnovijim vozilima na Novom Beogradu i učinite svoje iskustvo učenja vožnje nezaboravnim.';
        } else if ($curent == '/kontakt.php' || $curent == '/kontakt') {
            echo 'Kontaktirajte Auto školu Kobac za sve informacije o upisu, obuci i voznim ispitima. Naše prijateljsko osoblje je tu da odgovori na sva vaša pitanja. Posetite nas na Novom Beogradu ili nas kontaktirajte putem telefona ili emaila za brzu podršku.';
        } else if ($curent == '/cenovnik.php' || $curent == '/cenovnik') {
            echo 'Kontaktirajte Auto školu Kobac za sve informacije o upisu, obuci i voznim ispitima. Naše prijateljsko osoblje je tu da odgovori na sva vaša pitanja. Posetite nas na Novom Beogradu ili nas kontaktirajte putem telefona ili emaila za brzu podršku.';
        } else {
            echo 'Sa nama do vozačke dozvole brzo, lako i sigurno! Nudimo obuku za A i B kategorije uz upotrebu novih, klimatizovanih vozila. ';
        }
        ?>
              ">
        <meta name="keywords"
              content="Auto škola, vozačka dozvola, B kategorija, A kategorija,
              Novi Beograd, vozački ispit, teorijska nastava, praktična obuka, 
              upis vozačke škole, online upis, klimatizovana vozila, obuka vozača, 
              saobraćajni znakovi, ispitni zadaci, vožnja motociklom, licencirana auto škola">
        <meta property="og:title" content="AUTO ŠKOLA | KOBAC" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://autoskolakobac.rs" />
        <meta property="og:description"
              content="Auto skola Kobac, dugogodišnje iskustvo u obuci vozača za A1,A2,A,B kategorije." />
        <meta property="og:site_name" content="AUTO ŠKOLA KOBAC" />
        <meta property="og:locale" content="sr_RS" />

        <?php
        if ($curent == '/index' || $curent == 'http://autoskolakobac.rs/index' || $curent == 'https://autoskolakobac.rs/index' || $curent == 'http://www.autoskolakobac.rs/' || $curent == 'https://www.autoskolakobac.rs/') {
            echo '<link rel="canonical" href="https://autoskolakobac.rs">';
        } else {
            echo '<link rel="canonical" href="' . $canonicalURL . '">';
        }
        ?>


        <!--Favicons-->
        <link rel="manifest" href="manifest.json">

        <link rel="icon" href="androidLogo2.png" type="image/x-icon">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="AUTO ŠKOLA KOBAC">

        <link rel="apple-touch-icon" sizes="144x144" href="iosLogo.png">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="AUTO ŠKOLA KOBAC">

        <!--CSS FILES-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
        <link href="css/theme.css" rel="stylesheet" type="text/css">

    </head>

    <body>
        <div id="headerAnimation">
            <!-- 'show': showMenu,s -->
            <div id="top" :class="{  'slideDown': animateSlideDown, 'slideUp': animateSlideUp }">
                <div class="container">
                    <section class="header-contant row text-center">
                        <aside class="col-lg-4 text-start mt-5">
                            <a class="mb-4 d-block" href="https://maps.app.goo.gl/fMvTZNG6X8VnBBMWA"><i class="fa-beat fa-solid fa-location-dot"></i> &nbsp; &nbsp; JURIJA GAGARINA 197</a>
                            <a class="d-block" href="tel:0112172178"><i class="fa-beat fa-solid fa-phone-volume"></i> &nbsp; &nbsp; 011/2172-178</a>
                        </aside>
                        <a class="col-6 col-lg-4 navbar-brand" href="https://autoskolakobac.rs">
                            <img class="logoHeader" src="logo.png" alt="KOBAC | LOGO">
                        </a>
                        <aside class="col-lg-4 text-end mt-6">
                            <a class="me-5" href="https://www.facebook.com/autoskolakobac/"><i class="fa-beat fa-brands fa-facebook"></i></a>
                            <a class="me-5" href="https://twitter.com/autoskolakobac"><i class="fa-beat fa-brands fa-twitter"></i></a>
                            <a href="https://www.instagram.com/auto_skola_kobac/"><i class="fa-beat fa-brands fa-instagram"></i></a>
                        </aside>
                        <div class="col-6">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                                    aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </section>
                </div>
                <header>
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="collapse navbar-collapse text-center" id="main-nav">
                                <ul class="navbar-nav ms-auto me-auto mt-2 mt-lg-0">
                                    <li class="nav-item mb-3 mb-md-0 animation <?php
                                    if ($curent == '/index' || $curent == '/') {
                                        echo 'active';
                                    }
                                    ?>" data-animation="slideDown5">
                                        <a class="nav-link underline" href="https://autoskolakobac.rs"><strong>POČETNA</strong></a>
                                    </li>

                                    <li class="nav-item ms-md-4 mb-3 mb-md-0 animation <?php
                                    if ($curent == '/o-nama') {
                                        echo 'active';
                                    }
                                    ?>" data-animation="slideDown5">
                                        <a class="nav-link underline"
                                           href="/o-nama"><strong>O NAMA</strong></a>
                                    </li>

                                    <li class="nav-item ms-md-4 mb-3 mb-md-0 animation <?php
                                    if ($curent == '/obuka') {
                                        echo 'active';
                                    }
                                    ?>" data-animation="slideDown4">
                                        <a class="nav-link" href="/obuka"><strong>OBUKA</strong></a>
                                    </li>

                                    <li class="nav-item ms-md-4 mb-3 mb-md-0 animation <?php
                                    if ($curent == '/novi-testovi') {
                                        echo 'active';
                                    }
                                    ?>" data-animation="slideDown3">
                                        <a class="nav-link dropdown-toggle" >
                                            <strong>TESTOVI</strong>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="/novi-testovi"><strong>NOVI TESTOVI</strong></a></li>
                                            <li><a class="dropdown-item" href="/ispitni-zadaci-prakticnog-ispita"><strong>ISPITNI ZADACI</strong></a></li>
                                            <li><a class="dropdown-item" href="/saobracajni-znaci"><strong>SAOBRACAJNI ZNACI</strong></a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item ms-md-4 mb-3 mb-md-0 animation <?php
                                    if ($curent == '/vozni-park') {
                                        echo 'active';
                                    }
                                    ?>" data-animation="slideDown2">
                                        <a class="nav-link" href="/vozni-park"><strong>VOZNI PARK</strong></a>
                                    </li>

                                    <li class="nav-item ms-md-4 mb-3 mb-md-0 animation <?php
                                    if ($curent == '/cenovnik') {
                                        echo 'active';
                                    }
                                    ?>" data-animation="slideDown2">
                                        <a class="nav-link" href="/cenovnik"><strong>CENOVNIK</strong></a>
                                    </li>

                                    <li class="nav-item ms-md-4 mb-3 mb-md-0 animation <?php
                                    if ($curent == '/kontakt') {
                                        echo 'active';
                                    }
                                    ?>" data-animation="slideDown">
                                        <a class="nav-link" href="/kontakt"><strong>KONTAKT</strong></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </header>
            </div>
        </div>