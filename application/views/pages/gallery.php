<style>
	.grid-image img{
		transform:rotate(-15deg);width:100%; height:160px;
		box-shadow: 0px 0px 50px black;
	}
	.grid-image img:hover{  
		transform:scale(1.4); 
		transition: 1s ease-in-out;
		position: relative;
		z-index: 10; 
	 }
</style>
<!-- Start Work -->
<div id="fh5co-work">
	<div class="container" style="background-image: radial-gradient(circle, #051937, #004e77, #008989, #00bf60, #dbe501);">

<?php 
	foreach ($galleryimage as $img) {
?>
		<div class="col-sm-6 col-md-4 col-lg-4 grid-image" >
			<img src="<?php echo base_url(); ?>/images/gallery/<?php echo $img->galleryimages; ?>" alt="n/a" class="img-responsive" data-toggle="modal" data-target="#myModal<?php echo $img->id; ?>">
		</div>
		<!-- Modal -->
		<div class="modal fade" id="myModal<?php echo $img->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="background: rgba(0,0,0,0.8)">
		  <div class="container modal-dialog" role="document" style="width:70%;margin:4% auto;">
		      <img src="<?php echo base_url(); ?>/images/gallery/<?php echo $img->galleryimages; ?>" alt="..." style="width:100%; min-height:350px; max-height: 400px; ">
		  </div>
		</div>
<?php 
	}
?>





	</div>
</div>
<!-- End Work -->

<div class="fh5co-spacer fh5co-spacer-md"></div>
