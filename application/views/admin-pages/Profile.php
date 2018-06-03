		<div class="col-sm-12 col-md-9 col-lg-9" style="background: blue; color:white;">
		<hr/>Profile !<hr/>
		</div>
		<div class="col-sm-12 col-md-9 col-lg-9">
			<br/>
			<h3><?php if(isset($profile_info)){ echo $profile_info->user_name; } ?>
				<small><br/><?php if(isset($profile_info)){ echo $profile_info->user_type; } ?></small>
			</h3><hr/>
			<p>
				<?php if(isset($profile_info)){ echo $profile_info->details; } ?>
			</p>
			<p>
				Email # <?php if(isset($profile_info)){ echo $profile_info->email; } ?><br/>
				Phone # <?php if(isset($profile_info)){ echo $profile_info->phone; } ?><br/>
				Social Link 1 # <?php if(isset($profile_info)){ echo $profile_info->profile_one; } ?><br/>
				Social Link 2 # <?php if(isset($profile_info)){ echo $profile_info->profile_two; } ?><br/>
				Social Link 3 # <?php if(isset($profile_info)){ echo $profile_info->profile_three; } ?>
			</p>
			<p>
				<a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#profileUpdate" style="margin:2%;">Update Profile</a>  
				<a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#profilePicture" style="margin:2%;">Chenge profile Picture</a>  
				<?php $msg = $this->session->flashdata('admin_msg'); if(isset($msg)){ echo $msg; }  ?>
        <!--===Confirmation message==-->


<!-- Modal -->
<div class="modal fade" id="profilePicture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  	<?php echo form_open_multipart('UserHome/ProfilePicture'); ?>
  	<form>
  	<input type="hidden" name="id" value="<?php if(isset($profile_info)){ echo $profile_info->id; } ?>">
  	<input type="text" name="old_image" value="<?php if(isset($profile_info)){ echo $profile_info->profile_picture; } ?>">
    <div class="modal-content" style="border-radius:0px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Profile</h4>
      </div>
      <div class="modal-body">
      <img src="<?php echo base_url(); ?>/images/trainers/<?php if(isset($profile_info)){ echo $profile_info->profile_picture; } ?>" style="width:50%; margin:0px auto;">
  <div class="form-group">
    <label for="profile_picture">File input</label>
    <input name="profile_picture" type="file" id="profile_picture">
    <p class="help-block">JPEG, JPG, PNG Only</p>
  </div>


      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
   </form><!--Update Profile form end..-->
  </div>
</div>


	<!--Profile modal-->
<!-- Modal -->
<div class="modal fade" id="profileUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <form action="<?php echo base_url('index.php/UserHome/ProfileUpdate'); ?>" method="post">
  	<input type="hidden" name="id" value="<?php if(isset($profile_info)){ echo $profile_info->id; } ?>">
    <div class="modal-content" style="border-radius:0px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Profile</h4>
      </div>
      <div class="modal-body">

  <div class="form-group">
    <label for="user_name">Profile Name</label>
    <input name="user_name" type="text" class="form-control" id="user_name" value="<?php if(isset($profile_info)){ echo $profile_info->user_name; } ?>">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="text" class="form-control" id="email" value="<?php if(isset($profile_info)){ echo $profile_info->email; } ?>">
  </div>

  <div class="form-group">
    <label for="phone">Phone</label>
    <input name="phone" type="text" class="form-control" id="phone" value="<?php if(isset($profile_info)){ echo $profile_info->phone; } ?>">
  </div>

  <div class="form-group">
    <label for="details">Details / About My Self</label>
    <textarea name="details" class="form-control" id="details" rows="4"><?php if(isset($profile_info)){ echo $profile_info->details; } ?></textarea>
  </div>
  <div class="form-group">
    <label for="profile_one">Profile Link 1</label>
    <input name="profile_one" type="text" class="form-control" id="profile_one" value="<?php if(isset($profile_info)){ echo $profile_info->profile_one; } ?>">
  </div>
  <div class="form-group">
    <label for="profile_two">Profile Link 2</label>
    <input name="profile_two" type="text" class="form-control" id="profile_two"  value="<?php if(isset($profile_info)){ echo $profile_info->profile_two; } ?>">
  </div>
  <div class="form-group">
    <label for="profile_three">Profile Link 3</label>
    <input name="profile_three" type="text" class="form-control" id="profile_three"  value="<?php if(isset($profile_info)){ echo $profile_info->profile_three; } ?>">
  </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
   </form><!--Update Profile form end..-->
  </div>
</div>



				</p>
		</div>		
	</div>
</main>
<br/>
			
<div class="container">
	<h4>Software Helpline</h4>
	Email# <a href="">islamhossainwork@gamil.com</a>, 
	Phone# <a href="">+880 1914 441334</a>
</div>
<Br/>
<br/>