			
			<!-- Start Work -->
			<div id="fh5co-work">
				<div class="container">
					<div class="row">

						<div class="col-md-6 col-sm-6 col-xs-6 fh5co-work-wrap">
							<a href="<?php echo base_url('index.php/Home/Gallery');?>" class="fh5co-work-item js-fh5co-work-item">
								<img src="images/gallery/
								<?php 
									$image = $this->gallery_model->GetSingleImageByLastUpload('web design');
									echo $image->galleryimages;
								 ?>
								" alt="<?php echo $image->galleryimages; ?>" class="img-responsive" style="width:673px; height:300px; opacity:0.8 ; ">
								<div class="fh5co-overlay-bg js-fh5co-overlay-bg"></div>
								<div class="fh5co-overlay-text js-fh5co-overlay-text">
									<h2>Web Design</h2>
									<p>
										See more pictures about Web Design
									</p>
								</div>
							</a>
						</div>	
						<div class="col-md-6 col-sm-6 col-xs-6 fh5co-work-wrap">
							<a href="<?php echo base_url('index.php/Home/Gallery');?>" class="fh5co-work-item js-fh5co-work-item">
								<img src="images/gallery/
								<?php 
									$image = $this->gallery_model->GetSingleImageByLastUpload('graphics design');
									echo $image->galleryimages;
								 ?>
								" alt="<?php echo $image->galleryimages; ?>" class="img-responsive" style="width:673px; height:300px;">
								<div class="fh5co-overlay-bg js-fh5co-overlay-bg"></div>
								<div class="fh5co-overlay-text js-fh5co-overlay-text">
									<h2>Graphics Design</h2>
									<p>
										See more pictures about Graphics Design
									</p>
								</div>
							</a>
						</div>	
						<div class="col-md-6 col-sm-6 col-xs-6 fh5co-work-wrap">
							<a href="<?php echo base_url('index.php/Home/Gallery');?>" class="fh5co-work-item js-fh5co-work-item">
								<img src="images/gallery/
								<?php 
									$image = $this->gallery_model->GetSingleImageByLastUpload('bpo');
									echo $image->galleryimages;
								 ?>
								" alt="<?php echo $image->galleryimages; ?>" class="img-responsive" style="width:673px; height:300px;">
								<div class="fh5co-overlay-bg js-fh5co-overlay-bg"></div>
								<div class="fh5co-overlay-text js-fh5co-overlay-text">
									<h2>BPO- Finance & Banking</h2>
									<p>
										See more pictures about BPO- Finance & Accounting
									</p>
								</div>
							</a>
						</div>	
						<div class="col-md-6 col-sm-6 col-xs-6 fh5co-work-wrap">
							<a href="<?php echo base_url('index.php/Home/Gallery');?>" class="fh5co-work-item js-fh5co-work-item">
								<img src="images/gallery/
								<?php 
									$image = $this->gallery_model->GetSingleImageByLastUpload('Customar care');
									echo $image->galleryimages;
								 ?>
								" alt="<?php echo $image->galleryimages; ?>" class="img-responsive" style="width:673px; height:300px;">
								<div class="fh5co-overlay-bg js-fh5co-overlay-bg"></div>
								<div class="fh5co-overlay-text js-fh5co-overlay-text">
									<h2>Customar Care</h2>
									<p>
										See more pictures about Customar Care
									</p>
								</div>
							</a>
						</div>						
<!--
						<div class="col-md-6 col-sm-6 col-xs-6 fh5co-work-wrap">
							<a href="#" class="fh5co-work-item js-fh5co-work-item">
								<img src="images/work_2.jpg" alt="Image" class="img-responsive">
								<div class="fh5co-overlay-bg js-fh5co-overlay-bg"></div>
								<div class="fh5co-overlay-text js-fh5co-overlay-text">
									<h2>Work no. 2</h2>
									<ul class="fh5co-categories">
										<li>Web Design</li>
										<li>Identity</li>
										<li>Packaging</li>
									</ul>
								</div>
							</a>
						</div>						
-->
					</div>

					<!-- Start More Works -->
					<div class="row">
						<div class="col-md-12 fh5co-more-works js-fh5co-more-works">
							<div class="row">
<?php 
	foreach($gallerycontents as $gallerycontent){
?>
								<div class="col-md-6 col-sm-6 col-xs-6 fh5co-work-wrap">
									<a href="<?php echo base_url('index.php/Home/Gallery');?>" class="fh5co-work-item js-fh5co-work-item">
		<img src="images/gallery/
			<?php 
				$image = $this->gallery_model->GetSingleImageByLastUpload($gallerycontent->club);
				echo $image->galleryimages;
			?>
		" alt="<?php echo $image->galleryimages; ?>" class="img-responsive" style="width:673px; height:300px;">
										<div class="fh5co-overlay-bg js-fh5co-overlay-bg"></div>
										<div class="fh5co-overlay-text js-fh5co-overlay-text">
											<h2><?php echo $gallerycontent->gallerytitle; ?></h2>
											<p><?php echo $gallerycontent->gallerycontent; ?></p>
										</div>
									</a>
								</div>
<?php 
	}/*END of Gallery Content || information about clubs..*/
?>


<!--	
								<div class="col-md-6 col-sm-6 col-xs-6 fh5co-work-wrap">
									<a href="#" class="fh5co-work-item js-fh5co-work-item">
										<img src="images/work_7.jpg" alt="Image" class="img-responsive">
										<div class="fh5co-overlay-bg js-fh5co-overlay-bg"></div>
										<div class="fh5co-overlay-text js-fh5co-overlay-text">
											<h2>Youth Club 1 &mdash; PICTUERES</h2>
											<p>
												23/8, Juhuri Moholla, Shyamoli, Dhaka &mdash; 1208.
												<br/>
												<strong>Kobita Akter (CM)</strong>
												<br/>
												+880 XXXX XXXXXX
											</p>
										</div>
									</a>
								</div>
-->

								<div class="col-md-6 col-sm-6 col-xs-6 fh5co-work-wrap">
									<a href="<?php echo base_url('index.php/Home/Gallery');?>" class="fh5co-work-item js-fh5co-work-item">
										<img src="images/work_7.jpg" alt="Image" class="img-responsive">
										<div class="fh5co-overlay-bg js-fh5co-overlay-bg"></div>
										<div class="fh5co-overlay-text js-fh5co-overlay-text">
											<h2>Special Events &mdash; S2S</h2>
											<p>
											</p>
										</div>
									</a>
								</div>							

	
							</div>
						</div>
						<div class="col-md-12 text-center">
						<a href="#" class="fh5co-view js-fh5co-view"><span class="fh5co-icon-view"><i class="ti-plus"></i></span> <span class="js-fh5co-view-text">View All</span></a>
						</div>
					</div>
					<!-- End More Works -->


				</div>
			</div>
			<!-- End Work -->

			<div class="fh5co-spacer fh5co-spacer-md"></div>
