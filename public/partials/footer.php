<div class="ftAreaWrap bg-secondary text-gray888">
    <!-- footerAside -->
    <aside class="footerAside pt-6 pb-md-3 pt-md-7 pb-lg-5 pt-lg-10 pt-xl-15 pb-xl-13 text-center text-md-left">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 mb-6"></div>
                <div class="col-12 col-md-3 mb-6">
                    <h3 class="text-white mb-4"><?php echo htmlspecialchars($lang["adress"])?></h3>
                    <!-- ftAdr -->
                    <address class="ftAdr mb-2 mb-md-5"><?php echo htmlspecialchars($lang["adressLocation"])?></address>
                    <a href="./prijava.php" class="ftPinLink text-uppercase">
                        <i class="fas fa-map-marker-alt icn"><span class="sr-only">icon</span></i>
                        <?php echo htmlspecialchars($lang["gettingHere"]);?>
                    </a>
                </div>
                <div class="col-12 col-md-3 mb-6">
                    <h3 class="text-white mb-4"><?php echo htmlspecialchars($lang["contactUs"])?></h3>
                    <!-- ftContactList -->
                    <ul class="list-unstyled ftContactList mb-0 mb-md-3">
                        <li>
                            <a href="mailto:&#105;&#110;&#102;&#111;&#064;&#109;&#117;&#115;&#101;&#117;&#109;&#119;&#112;&#046;&#099;&#111;&#109;">office@bienalefantastike.rs</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 mb-6"></div>
            </div>
        </div>
    </aside>
    <!-- pageFooter -->
    <footer id="pageFooter" class="bg-dark text-gray777 text-center pt-6 pb-3 pt-lg-11 pb-lg-9">
        <div class="container">
            <!-- socialNetworks -->
            <ul class="list-unstyled socialNetworks ftSocialNetworks d-flex flex-wrap justify-content-center mb-4">
                <li>
                    <a href="javascript:void(0);">
                        <i class="fab fa-facebook-f"><span class="sr-only">facebook</span></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="fab fa-instagram"><span class="sr-only">instagram</span></i>
                    </a>
                </li>
            </ul>
            <p class="mb-2"><?php echo htmlspecialchars($lang["phoenix"]);?> &copy; 2021. <?php echo htmlspecialchars($lang["allRightsReserved"]);?></p>

        </div>
    </footer>
</div>