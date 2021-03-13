<?php
require_once './partials/header.php';

?>
<main>
    <!-- bsSlidViv -->
    <div class="bsSlidViv">
        <div>
            <!-- introBannerBlock -->
            <section class="introBannerBlock introBannerBlockVii hdIsVii w-100 text-center text-white position-relative d-flex bgCover" style="background-image: url(./images/kolarac.jpg);">
                <div class="ibbAlignHolder w-100 d-flex align-items-center">
                    <div class="ibbHolder w-100 py-6">
                        <div class="container holder position-relative">
                            <div class="row">
                                <div class="col-12 col-md-8 offset-md-2">
                                    <strong class="d-block fontSerif mainHeadingTitle font-weight-normal mb-4"><?php echo htmlspecialchars($lang['kolaracGallery']); ?></strong>
                                    <h1 class="text-white ibbHeading mb-8"><?php echo htmlspecialchars($lang['kolaracGalleryText']); ?></h1>
                                    <a href="./contact-us.php" class="btn btn-dark btnDarkInverse align-top btnMdMinWidth"><?php echo htmlspecialchars($lang['participate']); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
<!--        <div>
             introBannerBlock 
            <section class="introBannerBlock introBannerBlockVii hdIsVii w-100 text-center text-white position-relative d-flex bgCover" style="background-image: url(./images/moderna-galerija-valjevo.jpg);">
                <div class="ibbAlignHolder w-100 d-flex align-items-center">
                    <div class="ibbHolder w-100 py-6">
                        <div class="container holder position-relative">
                            <div class="row">
                                <div class="col-12 col-md-8 offset-md-2">
                                    <strong class="d-block fontSerif mainHeadingTitle font-weight-normal mb-4">Модерна Галерија Ваљево</strong>
                                    <h1 class="text-white ibbHeading mb-8">Овај догађај ће се одржати некада</h1>
                                    <a href="./contact-us.php" class="btn btn-dark btnDarkInverse align-top btnMdMinWidth">Пријавите се за учешће</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>-->
        <div>
            <!-- introBannerBlock -->
            <section class="introBannerBlock introBannerBlockVii hdIsVii w-100 text-center text-white position-relative d-flex bgCover" style="background-image: url(./images/kulturni-centar-novi-sad.jpg);">
                <div class="ibbAlignHolder w-100 d-flex align-items-center">
                    <div class="ibbHolder w-100 py-6">
                        <div class="container holder position-relative">
                            <div class="row">
                                <div class="col-12 col-md-8 offset-md-2">
                                    <strong class="d-block fontSerif mainHeadingTitle font-weight-normal mb-4"><?php echo htmlspecialchars($lang['noviSadGallery']); ?></strong>
                                    <h1 class="text-white ibbHeading mb-8"><?php echo htmlspecialchars($lang['noviSadGalleryText']); ?></h1>
                                    <a href="./contact-us.php" class="btn btn-dark btnDarkInverse align-top btnMdMinWidth"><?php echo htmlspecialchars($lang['participate']); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <aside class="nextCounterAside text-center">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="rounded shadow bg-white text-black-50 pt-4 pb-4 pt-lg-7 pb-lg-7">
                        <?php echo htmlspecialchars($lang["timeUntilEvent"]);?>
                    <div id="countDown" style="font-size: 5rem;"></div>
                </div>
            </div>
        </div>
    </aside>

    <!-- exploreBlock -->
    <section class="exploreBlock bg-secondary pt-6 pb-3 pt-md-12 pb-md-6 pt-lg-17 pb-lg-12 pt-xl-22 pb-xl-17">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 pr-lg-10 pr-xl-16 stickyContainer">
                    <!-- headHeading -->
                    <header class="headHeading hhFzMedium text-gray888 pt-2 mb-6 stickyElem sceHeadStick">
                        <h1 class="text-white mb-5"><?php echo htmlspecialchars($lang['phoenix']); ?></h1>
                        <a href="./feniks-kolekcija-mihajlovic.php" class="d-none d-md-inline-block  align-top teeSeeAllBtn inDark mt-2"><?php echo htmlspecialchars($lang['takeLook']); ?><i class="icomoon-arrowCircleRight align-middle icn ml-1"><span class="sr-only">icon</span></i></a>
                    </header>
                </div>
                <div class="col-12 col-md-8">
                    <!-- makeItMasonery -->
                    <div class="row makeItMasonery">
                            
                           <?php for($i=0;$i<4;$i++){ ?>
                                <div class="col-12 col-sm-6 mimItem">
                                     <!-- collectionColumn -->
                                     <article class="collectionColumn mb-6 text-center position-relative">
                                         <div class="imgHolder">
                                             <a href="./feniks-kolekcija-mihajlovic.php">
                                                 <img src="<?php echo $pictures[$i]['filePath']; ?>" class="img-fluid w-100 d-block" alt="<?php echo htmlspecialchars($pictures[$i]['name']); ?>" style="object-fit: scale-down;">
                                                 <div class="ccCaption position-absolute bg-white d-flex align-items-center justify-content-center">
                                                     <div class="w-100 py-3 px-3">
                                                         <h2 class="fzMedium mb-4"><?php echo htmlspecialchars($pictures[$i]['picture']); ?></h2>
                                                         <h3 class="fontAlter text-gray777 mb-0"><?php echo htmlspecialchars($pictures[$i]['name']); ?></h3>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                     </article>
                                 </div>
                           <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- instaFeedBlock -->
    <section class="instaFeed Block text-center bg-grayf8f8f8 hasBdr pt-6 pt-lg-8 pt-xl-12">
        <div class="container">
            <h2 class="mb-13"><?php echo htmlspecialchars($lang["ourPartners"]); ?></h2>
        </div>
        <div class="row d-block no-gutters">
            <!-- instaFullFeedSlider -->
            <div class="instaFullFeedSlider mb-5">
                <div>
                    <a href="https://www.grading.rs" class="d-block">
                        <img src="./images/grading-logo-mobile.png" class="img-fluid" alt="image descripton" style="object-fit: cover;" >
                    </a>
                </div>
                <div>
                    <a href="#" class="d-block">
                        <img src="./images/logo-panorama-erdoglija-2020.png" class="img-fluid" alt="image descripton" style="object-fit: cover;">
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
require_once './partials/footer.php';
?>
</div>
<!-- include jQuery library -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- include bootstrap popper JavaScript -->
<script src="js/popper.min.js"></script>
<!-- include bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- include custom JavaScript -->
<script src="js/jqueryCustom.js"></script>
<!-- include fontawesome kit -->
<script src="https://kit.fontawesome.com/391f644c42.js"></script>
<script type="text/javascript">
    var countDownDate = new Date("Aug 1, 2021 00:00:00").getTime();

// Update the count down every 1 second
    var x = setInterval(function () {

// Get today's date and time
        var now = new Date().getTime();

// Find the distance between now and the count down date
        var distance = countDownDate - now;

// Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

// Display the result in the element with id="demo"
        document.getElementById("countDown").innerHTML = days + " d " + hours + " h "
                + minutes + " m " + seconds + " s ";

// If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
</body>
</html>