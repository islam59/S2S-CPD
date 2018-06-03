		<div class="col-sm-12 col-md-9 col-lg-9" style="background: blue; color:white;">
		<hr/>Applicant Requests !<hr/>
		</div>
		<div class="col-sm-12 col-md-9 col-lg-9">
<!--===============================================================================-->
<div class="row">
<hr/>

<div style=" height:130vh; overflow: scroll;  ">

<?php foreach ($requests as $request) { ?>
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
        </p>        
        <p style="text-align:right;">          
          <a href="#" class="btn btn-danger btn-xs" role="button">Decline</a>
          <a href="#" class="btn btn-info btn-xs" role="button"  data-toggle="modal" data-target="#myModal">Details</a>
          <a href="<?php echo base_url('index.php/UserHome/ApprovedInClub/'); ?><?php echo $request->id; ?>" class="btn btn-primary btn-xs" role="button">Accept</a> 
        </p>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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