<main role="main" style="margin-top:-60px;">
	<div class="container">
		<div class="col-sm-12 col-md-3 col-lg-3" id="left-menu">
			<div class="left-menu" id="left-menu">
				<div class="left-menu-item">
					<img src="<?php echo base_url('images/trainers/'); ?><?php if(isset($profile_info)){ echo $profile_info->profile_picture; } ?>" alt="N/A" style="width:100%; height:180px; ">
				</div>
				<hr/>
				<div class="left-menu-item"><a href="<?php echo base_url('index.php/UserHome/Dashboard');?>">DASHBOARD</a></div>
				<div class="left-menu-item"><a href="<?php echo base_url('index.php/UserHome/Profile');?>">My Profile</a></div>				
				<div class="left-menu-item"><a href="">My Tasks</a></div>
				<hr/>
				<div class="left-menu-item"><a href="<?php echo base_url('index.php/UserHome/Request'); ?>">Requests (<span style="color:red;">					
					<?php if(isset($allApplicant)){ echo $allApplicant; } ?>
				</span>)</a></div>
				<div class="left-menu-item"><a href="">Youth Clubs(<span style="color:red;">				
					<?php if(isset($allYouths)){ echo $allYouths; } ?>
				</span>)</a></div>
				<div class="left-menu-item"><a href="">Computer Labs(<span style="color:red;">				
					<?php if(isset($allTrainee)){ echo $allTrainee; } ?>
				</span>)</a></div>
				<div class="left-menu-item"><a href="">Trainee List</a></div>
				<hr/> 
				<div class="left-menu-item"><a href="">Attendance</a></div> 
				<div class="left-menu-item"><a href="">Routine</a></div> 
				<div class="left-menu-item"><a href="">Test Uploads</a></div>	
				<div class="left-menu-item"><a href="">Result Uplaods</a></div>			 
				<hr/>
			</div>
		</div>
