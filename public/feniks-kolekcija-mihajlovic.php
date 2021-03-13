<?php 

    require_once './partials/header.php';
?>
		<main>
			<!-- imageGalleryBlock -->
			<section class="imageGalleryBlock pt-8 pb-3 pb-md-6 pt-lg-13 pb-lg-10 pt-xl-19 pb-xl-16">
				<div class="container">
                                    
					<!-- isoContentHolder -->
					<div class="row isoContentHolder">
                                            
                                            <?php for($i=0;$i<count($pictures);$i++){ ?>
                                      
						<div class="col-12 col-sm-6 col-md-4 col-xl-3 objects isoCol">
							<!-- collectionColumn -->
							<article class="collectionColumn mb-6 position-relative text-center">
								<div class="imgHolder">
									<a data-fancybox="gallery" data-caption="<?php echo htmlspecialchars($pictures[$i]['picture']);?>" href="<?php echo htmlspecialchars($pictures[$i]['filePath']);?>">
                                                                            <img style="object-fit: scale-down;" src="<?php echo htmlspecialchars($pictures[$i]['filePath']);?>" class="img-fluid w-100 d-block" alt="<?php echo htmlspecialchars($pictures[$i]['name']);?>">
										<div class="ccCaption position-absolute bg-white d-flex align-items-center justify-content-center">
											<div class="w-100 py-3 px-3">
												<h2 class="fzMedium mb-4"><?php echo htmlspecialchars($pictures[$i]['picture']);?></h2>
												<h3 class="fontAlter text-gray777 mb-0"><?php echo htmlspecialchars($pictures[$i]['name']);?></h3>
											</div>
										</div>
									</a>
								</div>
							</article>
						</div>
                                            <?php  } ?> 
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
</body>
</html>