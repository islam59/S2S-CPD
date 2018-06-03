		
			<!-- Start  Let's Chat -->
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2 class="h2">Contact Info</h2>
						<h5 style="color:teal; font-weight: bold;">Community Participation & Development (CPD)</h5>
						<p>
							<strong>Address#</strong> <?php if(isset($siteinfo)){ echo $siteinfo->address; } ?><br/>
							<strong>Phone#</strong> <a href="mailto:info@freehtml5.co" target="_blank"><?php if(isset($siteinfo)){ echo $siteinfo->phone; } ?></a><br/>
							<strong>Web#</strong> <a href="mailto:info@freehtml5.co" target="_blank"><?php if(isset($siteinfo)){ echo $siteinfo->website; } ?></a>.
						</p>
					</div>

					<div class="col-md-6">
						<?php if(isset($siteinfo)){ echo $siteinfo->companymap; } ?>
					</div>
				</div>
			</div>
			<!-- End  Let's Chat -->
			<div class="fh5co-spacer fh5co-spacer-sm"></div>

		</main>