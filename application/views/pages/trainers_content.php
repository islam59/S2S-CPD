<div id="fh5co-work">
	<div class="container">
	<?php 
	 foreach ($authorities as $author) {
	 	if($author->user_type == 'Executive Director'){
	 		$six_class = 'col-md-6'; 
	 	}elseif($author->user_type == 'Program Controller'){
	 		$six_class = 'col-md-6'; 
	 	}else{
			$six_class = 'col-md-4'; 
	 	}
	?>
				<div class="col-sm-12 <?php echo $six_class; ?>" style="max-height: 450px; overflow: hidden; margin-top:15px;">
				    <div class="thumbnail">
						<img src="<?php echo base_url(); ?>images/trainers/<?php echo $author->profile_picture; ?>" alt="Islam Hossain" style="width:100%; height:290px;">
						<div class="caption">
							<h4><?php echo $author->user_name; ?></h4>
							<p><?php echo $author->user_type; ?></p>
						</div>
					</div>
				</div>
<?php 
} //end of foreach.. 
?>

	</div>
</div>

			<div class="fh5co-spacer fh5co-spacer-md"></div>