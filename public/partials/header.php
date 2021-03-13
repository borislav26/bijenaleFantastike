<?php
include_once './localisation/configuration.php';

$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$currentURL = $components[1];

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Access-Control-Allow-Credentials: true');

$pictures = [
    [
        "name" => $lang['katarinaZaric'],
        "picture" => $lang['putZaVavilon'],
        "filePath" => "./images/put-za-vavilon.JPG"
    ],
    [
        'name' => $lang['zeljkoDjurovic'],
        "picture" => $lang['skroviste'],
        "filePath" => "./images/skroviste.JPG"
    ],
    [
        'name' => $lang['slavkoKrunic'],
        "picture" => $lang['klandestina'],
        "filePath" => "./images/klandestina.JPG"
    ],
    [
        'name' => $lang['sergejAparin'],
        "picture" => $lang['gdeJeKatarinaVajs'],
        "filePath" => "./images/gde-je-katarina-vajs.JPG"
    ],
    [
        'name' => $lang['petarMosic'],
        "picture" => $lang['zlatnoDete'],
        "filePath" => "./images/zlatno-dete.JPG"
    ],
    [
        'name' => $lang['zoranIvanovic'],
        "picture" => $lang['feniks'],
        "filePath" => "./images/feniks.JPG"
    ],
    [
        'name' => $lang['ljubodragJankovicJale'],
        "picture" => $lang['izlet'],
        "filePath" => "./images/izlet.JPG"
    ],
    [
        'name' => $lang['milosSobajic'],
        "picture" => $lang['krovoviPariza'],
        "filePath" => "./images/krovovi-pariza.JPG"
    ],
    [
        'name' => $lang['vladimirDunic'],
        "picture" => $lang['ognjeniAndjeo'],
        "filePath" => "./images/ognjeni-andjeo.JPG"
    ],
    [
        'name' => $lang['dejanUlardzic'],
        "picture" => $lang['covekSaVelikomSakom'],
        "filePath" => "./images/covek-sa-velikom-sakom.JPG"
    ],
    [
        'name' => $lang['vasaDolacki'],
        "picture" => $lang['cunoviOdHartijeISna'],
        "filePath" => "./images/cunovi-od-hartije-i-sna.JPG"
    ],
    [
        'name' => $lang['milosMiletic'],
        "picture" => $lang['bogorodicaIzFirence'],
        "filePath" => "./images/bogorodica-iz-firence.JPG"
    ],
        ]
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- set the encoding of your site -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- set the page title -->
        <title>Bijenale fantastike</title>
        <!-- inlcude google archivo & lora font cdn link -->
        <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Lora:ital,wght@0,400;0,700;1,400;1,700&family=Muli:ital@0;1&family=Merriweather&display=swap" rel="stylesheet">
        <!-- include the site bootstrap stylesheet -->
        <link rel="stylesheet" href="./css/bootstrap.css">
        <!-- include the site stylesheet -->
        <link rel="stylesheet" href="./style.css">
        <!-- include the site responsive stylesheet -->
        <link rel="stylesheet" href="./css/responsive.css">
        <style>
            .prijava-dugme{
                background-color: white; 
                padding: 3px 2px 3px 2px; 
                border-radius: 5px; 
                color: #212329;
            }
            .prijava-dugme:hover{
                background-color: #999;
                transition: 1s;
            }

        </style>
    </head>
    <body class="hClassViii">
        <!-- pageWrapper -->
        <div id="pageWrapper">
            <div class="phStickyWrap phVii w-100" style="height: 100px;">
                <!-- pageHeader -->
                <header id="pageHeader" class="position-absolute w-100 bg-dark">
                    <!-- htTopBar -->
                    <!-- hdHolder -->
                    <div class="hdHolder headerFixer">
                        <div class="container-fluid">
                            <!-- navbar -->
                            <nav class="navbar navbar-expand-md navbar-light d-block px-0 pt-2 pb-2 pt-md-2 pb-md-2 pt-lg-4 pb-lg-5">
                                <div class="row">
                                    <div class="col-5 col-sm-3 col-lg-2">
                                        <!-- logo -->
                                        <div class="logo logoVii mt-lg-1">
                                            <a href="./naslovna.php">
                                                <img src="./images/grading-logo-mobile.png" class="img-fluid" alt="Bijenale Fantastike">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-7 col-sm-9 col-lg-10 position-static d-flex justify-content-end pt-lg-1">
                                        <!-- navbar collapse -->
                                        <div class="collapse navbar-collapse pageNavigationCollapse pageNavigationCollapseVii justify-content-md-end" id="pageNavigationCollapse">
                                            <!-- mainNavigation -->
                                            <ul class="navbar-nav ainNavigation mainNavigationVii text-capitalize">
                                                <li class="nav-item 
                                                <?php
                                                echo $currentURL == "naslovna.php" ? "active" : ""
                                                ?> 
                                                    dropdown">
                                                    <a class="nav-link" href="./naslovna.php"><?php echo htmlspecialchars($lang["home"]); ?></a>
                                                </li>
                                                <li class="nav-item
                                                <?php
                                                echo $currentURL == "sponzori.php" ? "active" : ""
                                                ?> 
                                                    dropdown">
                                                    <a class="nav-link" href="./sponzori.php"><?php echo htmlspecialchars($lang["partners"]); ?></a>

                                                </li>
                                                <li class="nav-item
                                                <?php
                                                echo $currentURL == "galerija.php" ? "active" : ""
                                                ?> 
                                                    dropdown">
                                                    <a class="nav-link" href="./galerija.php"><?php echo htmlspecialchars($lang["gallery"]); ?></a>
                                                    <!-- dropdown menu -->

                                                </li>
                                                <li class="nav-item
                                                <?php
                                                echo $currentURL == "feniks-kolekcija-mihajlovic.php" ? "active" : ""
                                                ?> 
                                                    dropdown">
                                                    <a class="nav-link" href="./feniks-kolekcija-mihajlovic.php"><?php echo htmlspecialchars($lang["phoenix"]); ?></a>
                                                </li>
                                                <li class="nav-item
                                                <?php
                                                echo $currentURL == "fondacija-mihajlovic-feniks.php" ? "active" : ""
                                                ?> 
                                                    dropdown">
                                                    <a class="nav-link" href="./fondacija-mihajlovic-feniks.php"><?php echo htmlspecialchars($lang["foundationHeader"]); ?></a>
                                                </li>

                                                <li class="nav-item
                                                <?php
                                                echo $currentURL == "prijava.php" ? "active" : ""
                                                ?> 
                                                    dropdown" style="padding: 2px 4px 2px 4px; color:#212329; background-color:white; border-radius:5px;">
                                                    <a class="nav-link" href="./prijava.php" style="color:white;"><?php echo htmlspecialchars($lang["competition"]); ?></a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo htmlspecialchars($lang["language"]); ?></a>
                                                    <!-- dropdown menu -->
                                                    <div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
                                                        <!-- mnDropList -->
                                                        <ul class="list-unstyled mnDropList mb-0 pt-1 pb-1 pt-md-4 pb-md-6">
                                                            <li class="hasDropdown">
                                                                
                                                                <a href="./naslovna.php?lang=srb">
                                                                    <img src="./images/serbia-flag.png" style="width:30px;">
                                                                </a>
                                                                <!-- mnDropList -->

                                                            </li>
                                                            <li class="hasDropdown">
                                                                <img src="./images/engleska-zastava.webp" style="width:30px;">
                                                                <!-- mnDropList -->
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex align-items-center ml-3 ml-lg-6">

                                            <!-- hdMenuOpener -->
                                            <a href="javascript:void(0);" class="hdMenuOpener hdSideMenuOpener position-relative ml-4 d-none d-md-block">
                                                <span class="icnBar position-absolute"><span class="sr-only">menu</span></span>
                                            </a>
                                            <!-- navbar toggler -->
                                            <button class="navbar-toggler pgNavOpener pgNavOpenerVii position-absolute" type="button" data-toggle="collapse" data-target="#pageNavigationCollapse" aria-controls="pageNavigationCollapse" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"><span class="sr-only">menu</span></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <nav class="navbar navbar-dark d-flex flex-column navbarSide position-fixed h-100 px-6 pt-10 pb-6 px-md-10 pb-md-10">
                        <ul class="navbar-nav mainNavigation w-100 flex-grow-1 mainSideNavigation text-capitalize d-block">
                            <li class="nav-item active dropdown">
                                <a class="nav-link" href="./naslovna.php"><?php echo htmlspecialchars($lang["home"]); ?></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="./sponzori.php"><?php echo htmlspecialchars($lang["partners"]); ?></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="./galerija.php"><?php echo htmlspecialchars($lang["gallery"]); ?></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="./feniks-kolekcija-mihajlovic.php"><?php echo htmlspecialchars($lang["phoenix"]); ?></a>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" style="color:black;" href="./prijava.php"><?php echo htmlspecialchars($lang["competition"]); ?></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="./fondacija-mihajlovic-feniks.php"><?php echo htmlspecialchars($lang["foundationHeader"]); ?></a>
                            </li>
                        </ul>
                        <div class="nvbBottomWrap w-100 flex-shrink-0 text-gray888 pt-10 pb-1">
                            <address class="mb-0">
                                <p>
                                    <a href="mailto:info@museumwp.com" class="colorInherit textDecorationNone">office@bienalefantastike.rs</a>
                                </p>
                                <ul class="list-unstyled socialNetworks ftSocialNetworks ftSocialNetworksVix d-flex flex-wrap mb-2 mt-11">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="fab fa-facebook-f" aria-hidden="true"><span class="sr-only">facebook</span></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="fab fa-instagram" aria-hidden="true"><span class="sr-only">instagram</span></i>
                                        </a>
                                    </li>

                                </ul>
                            </address>
                        </div>
                        <a href="javascript:void(0);" class="hdMenuOpener hdSideMenuOpener position-absolute">
                            <span class="icnBar position-absolute"><span class="sr-only">menu</span></span>
                        </a>
                    </nav>
                </header>
            </div>