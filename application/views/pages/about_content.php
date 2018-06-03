		<main role="main">
			


				<!-- Tabs -->
				<div class="container">
					<div class="row">
						<div class="col-md-12">

								<!-- Vertical Menu Tabs -->
								<div id="fh5co-tab-feature-vertical" class="fh5co-tab">
									<ul class="resp-tabs-list hor_1">
										<!-- li><i class="fh5co-tab-menu-icon ti-ruler-pencil"></i>Design</li-->
										<br/><br/>
										<li><i class="fh5co-tab-menu-icon ti-paint-bucket"></i> Employability Training</li>
										<li><i class="fh5co-tab-menu-icon ti-shopping-cart"></i>Vocational Training</li>
									</ul>
									<div class="resp-tabs-container hor_1">
										<div>
											<div class="row">
												<div class="col-md-12">
													<h2 class="h3">Employability Training</h2>
												</div>
												<div class="col-md-9">
													<p>
														<?php 
															if(isset($about_content)){ echo $about_content->employability_training; }
														?>
													</p>
												</div>
											</div>
										</div>
										<div>
											<div class="row">
												<div class="col-md-12">
													<h2 class="h3">Vocational Training</h2>
												</div>
												<div class="col-md-9">
													<p>
														<?php 
															if(isset($about_content)){ echo $about_content->employability_training; }
														?>
													</p>
												</div>
											</div>
										</div>
										<div>
											<div class="row">
												<div class="col-md-12">
													<h2 class="h3">Vocational Training</h2>
												</div>
												<div class="col-md-9">
													<p>
														<?php 
															if(isset($about_content)){ echo $about_content->employability_training; }
														?>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Vertical Menu Tabs -->
							
					</div>
				</div>
				<!-- Tabs -->
				
				<div class="fh5co-spacer fh5co-spacer-md"></div>
				
				<!-- Pricing Table -->
				<div class="container">
					<div class="row fh5co-pricing-table-1">				

<?php foreach ($gallerycontents as $gallerycontent) { ?>
						<div class="col-md-4 col-sm-6 fh5co-pricing-table-item fh5co-best-offer" style="margin-top:15px;">
							<div class="fh5co-pricing-table-item-heading">
								<h4 style="color:#d7d7d7; "><?php echo $gallerycontent->gallerytitle; ?></h4>
							</div>
							<div class="fh5co-pricing-table-item-body">
								<?php echo $gallerycontent->gallerycontent; ?>
								<div class="fh5co-spacer  fh5co-spacer-xxs"></div>
								<p><a href="<?php echo base_url('index.php/'); ?>Home/StudentRegister" class="btn btn-primary btn-block fh5co-no-margin-botton">Register Now !</a></p>
							</div>
						</div>
<?php } ?>
						<div class="col-md-4 col-sm-6 fh5co-pricing-table-item fh5co-best-offer" style="margin-top:50px;">
							<div class="fh5co-pricing-table-item-heading">
								<h4 style="color:#d7d7d7; ">Statistics</h4>
							</div>
							<div class="fh5co-pricing-table-item-body">
								<ul>
									
									<li><strong>Club&mdash;1 #</strong>  44/100</li>
									<li><strong>Club&mdash;2 #</strong>  44/100</li>
									<li><strong>Club&mdash;3 #</strong>  44/100</li>
									<li><strong>Club&mdash;4 #</strong>  44/100</li>
									<li><strong>Club&mdash;5 #</strong>  44/100</li>

								</ul>
								<div class="fh5co-spacer  fh5co-spacer-xxs"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- Pricing Table -->


			
				<div class="fh5co-spacer fh5co-spacer-xs"></div>

				<!-- Call to action -->
				<div class="fh5co-call-to-action text-center">
					<div class="container">
						<div class="fh5co-call-to-action-wrap">
							<div class="fh5co-call-to-action-inner text-center">
								<p class="fh5co-call-to-action-text">S2S &mdash; for Better Life 
								<br/>& 
								<br/>Better Enemy !</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Call to action -->	

				<div class="fh5co-spacer fh5co-spacer-md"></div>

		</main>