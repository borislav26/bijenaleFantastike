<?php

require_once './partials/header.php';
?>
		<main>
			<article class="ourMissionBlock pt-6 pt-md-9 pb-3 pb-md-9 pt-lg-12 pb-lg-13 pt-xl-20 pb-xl-20">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-10 offset-md-1">
							<div class="px-xl-5">
								<!-- headingHead -->
								<header class="headingHead text-center mb-7 mb-lg-10 mb-xl-16">
									<h1 class="mb-4"><?php echo htmlspecialchars($lang['whoWeAre']); ?></h1>
									<div class="eabDescrText eabDescrTextII text-gray888 fontSerif">
										<p>
                                                                                    <?php echo htmlspecialchars($lang['foundationMihajlovicFirst']); ?>
                                                                                    <?php echo htmlspecialchars($lang['foundationMihajlovicSecond']); ?><br><br>
                                                                                    <?php echo htmlspecialchars($lang['foundationMihajlovicThird']); ?>
                                                                                </p>
									</div>
								</header>
							</div>
							<div class="px-xl-5">
								<!-- headingHead -->
								<header class="headingHead text-center mb-7 mb-lg-10 mb-xl-16">
									<h1 class="mb-4"><?php echo htmlspecialchars($lang['ourVision']); ?></h1>
									<div class="eabDescrText eabDescrTextII text-gray888 fontSerif">
										<p>
                                                                                    <?php echo htmlspecialchars($lang['foundationMihajlovicFourth']); ?> 
                                                                                    <?php echo htmlspecialchars($lang['foundationMihajlovicFifth']); ?>
                                                                                    <?php echo htmlspecialchars($lang['foundationMihajlovicSixth']); ?>
                                                                                </p>
									</div>
								</header>
							</div>
						</div>
					</div>
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