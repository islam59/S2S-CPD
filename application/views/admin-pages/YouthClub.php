		<div class="col-sm-12 col-md-9 col-lg-9" style="background: blue; color:white;">
		<hr/>Youth Club !<hr/>
		</div>
		<div class="col-sm-12 col-md-9 col-lg-9">
<!--===============================================================================-->
<div class="row">
<hr/>

<div style=" height:130vh; overflow: scroll;  ">

<?php foreach ($students as $request) { ?>
  <div class="col-sm-12 col-md-6 col-lg-6" >
    <div class="thumbnail" style="background: lightblue; border-radius:0px;">      
      <div class="caption">
        <h5><?php echo strtoupper($request->youth_name); ?></h5>
        <p style="color:black;">Phone # <?php echo $request->youth_contact_number; ?></p>
        <p style="">
          Apply to # 
          <?php /*find the cm of applicants..*/
            $user_author = $this->user_model->getAuthorById($request->author_id);
            if($user_author){ echo $user_author->liability;  }
          ?>
          &mdash; 
          <?php /*find the cm of applicants..*/
            $user_author = $this->user_model->getAuthorById($request->author_id);
            if($user_author){ echo $user_author->user_name;  }
          ?>
           <br/><small>Add To &mdash; </small><br/>
        </p>        
        <p style="text-align:right;">     
         
          <a href="<?php echo base_url('index.php/UserHome/AddToLab/'); ?><?php echo $request->id; ?>/WD" class="btn btn-primary btn-xs" role="button">WD</a>
          <a href="<?php echo base_url('index.php/UserHome/AddToLab/'); ?><?php echo $request->id; ?>/GD" class="btn btn-primary btn-xs" role="button">GD</a>
          <a href="<?php echo base_url('index.php/UserHome/AddToLab/'); ?><?php echo $request->id; ?>/CC" class="btn btn-primary btn-xs" role="button">CC</a>
          <a href="<?php echo base_url('index.php/UserHome/AddToLab/'); ?><?php echo $request->id; ?>/FA" class="btn btn-primary btn-xs" role="button">F&A</a>

        </p>
      </div>
    </div>
  </div>


<?php } ?>

</div><!--end of scroll-->

<!--
  <div class="col-sm-12 col-md-6 col-lg-6" >
    <div class="thumbnail" style="background: lightblue; border-radius:0px;">      
      <div class="caption">
        <h5>Hasan Abdullah</h5>
        <p style="color:gray;">+008 9099 999999</p>
        <p style="">Apply to Club # 01</p>
        <p style="">CM Name # Ripon Hosen</p>
        <p style="">Address # </p>
        <p style="text-align:right;">
          <a href="#" class="btn btn-danger btn-xs" role="button">Decline</a>
          <a href="#" class="btn btn-primary btn-xs" role="button">Accept</a> 
        </p>
      </div>
    </div>
  </div>
-->


</div>
<!--===============================================================================-->
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