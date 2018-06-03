		<main role="main">
			<!-- Start Intro -->
<?php  if(isset($introduction)){ ?>
			<div id="fh5co-intro">
				<div class="container">
					<h2><?php echo $introduction->introtitle; ?></h2>
						<div class="row">
							<div class="col-md-10 col-md-push-1 fh5co-intro-sub" style="text-align:center;">
								<p><?php echo $introduction->introcontent; ?></p>
							</div>
						</div>
				</div>
			</div>
<?php } ?>			
			<!-- End Intro -->