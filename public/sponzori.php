<?php
require_once './partials/header.php';
?>
<main>

    <article class="ourMissionBlock pt-6 pt-md-9 pb-3 pb-md-9 pt-lg-12 pb-lg-13 pt-xl-20 pb-xl-20">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <div class="px-xl-5">
                        <!-- headingHead -->
                        <header class="headingHead text-center mb-7 mb-lg-10 mb-xl-16">
                            <h1 class="mb-4"><?php echo htmlspecialchars($lang['sponzorsTitle']); ?></h1>
                            <div class="eabDescrText eabDescrTextII text-gray888 fontSerif">

                                <p><?php echo htmlspecialchars($lang['sponzorsTextFirst']); ?>
                                        <br><br>
                                        <?php echo htmlspecialchars($lang['sponzorsTextSecond']); ?>
                                        <?php echo htmlspecialchars($lang['sponzorsTextSecond']); ?>
                                        <br><br>
                                        <?php echo htmlspecialchars($lang['sponzorsOffer']); ?>
                                        <a href="./files/ФЕНИКС-ЗА СПОНЗОРЕ.docx">
                                            <?php echo htmlspecialchars($lang['here']); ?>
                                        </a>
                                        <br><br>
                                        <?php echo htmlspecialchars($lang['somethingMore']); ?>
                                        <a href='./fondacija-mihajlovic-fenix.php'>
                                            <?php echo htmlspecialchars($lang['foundation']); ?>
                                        </a>

</p>
                            </div>
                        </header>
                    </div>
                </div>
            </div>
            <!-- logosList -->
            <ul class="list-unstyled logosList mb-0 text-center d-flex flex-wrap justify-content-center mx-auto">
                <li>
                    <a href="https://www.grading.rs">
                        <img src="./images/grading-logo-mobile.png" class="img-fluid" alt="Grading">
                    </a>
                </li>
                <li>
                    <a href="https://www.erdoglija.rs/">
                        <img src="./images/logo-panorama-erdoglija-2020.png" class="img-fluid" alt="Panorama Erdoglija">
                    </a>
                </li>
            </ul>
        </div>
    </article>
</main>
<!-- ftAreaWrap -->
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
</body>
</html>