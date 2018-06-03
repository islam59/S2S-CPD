		<main role="main">
				<?php $msg = $this->session->flashdata('msg'); if(isset($msg)){ echo $msg; } ?>
				<!-- Pricing Table -->
				<div class="container" style="margin-top:-100px; ">
					<h3 style="text-align: center; ">Registration Form !</h3>

          <p style="text-align: center;">
<?php 
  $msgReg = $this->session->flashdata('msgReg'); 
  if(isset($msgReg)){ 
    echo $msgReg;    
  } 
?><!--===Confirmation message==-->

          </p>
<!--=====================================================================================-->
<?php if(isset($sdata)){ echo $sdata; } ?>

<form name="registerForm" onsubmit="return validation()" action="<?php echo base_url('index.php/Home/SaveStudentApplication'); ?>" method="post" enctype="multipart/form-data">

<fieldset style="background: rgba(0,0,255,0.9); padding:1%;">
  <h4>#. Batch & CM Seleciton !</h4>

  <div class="form-group col-sm-12 col-md-6">
    <label for="author_id">Select Community Mobilizer (CM) </label>
    <select class="form-control" name="author_id" id="author_id" required>
      <option value="">Select &mdash; Community Mobilizer</option>
      <?php foreach ($cms as $cm) { ?>
      <option value="<?php echo $cm->liability; ?>"><?php echo $cm->liability; ?> CM &mdash; <?php echo $cm->user_name; ?></option>
      <?php  } ?>
    </select>
  </div>

  <div class="form-group col-sm-12 col-md-6">
    <label for="batch_id">Select Batch </label>
    <select class="form-control" name="batch_id" id="batch_id" required>
      <option value="">Select &mdash; Batch</option>
      <?php foreach ($batches as $batch) { ?>
      <option value="<?php echo $batch->id; ?>">Batch No # <?php echo $batch->id; ?> &mdash; <?php echo $batch->batch_name; ?></option>
      <?php } ?>
    </select>
  </div>

</fieldset>
<br/>

<fieldset style="background: orange; padding:1%;">
	<h4>A. Slum Identification !</h4>

  <div class="form-group col-sm-12 col-md-6">
    <label for="house_road_no">1. House & Road No: </label>
    <input name="house_road_no" type="text" class="form-control" id="house_road_no" placeholder="ex.&mdash; House-1/F, Road-1" required>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="slum_name">2. Name of Slum</label>
    <input name="slum_name" type="text" class="form-control" id="slum_name" placeholder="ex.&mdash; Adabor" required>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="block_line_name">3. Line/ Block Name</label>
    <input name="block_line_name" type="text" class="form-control" id="block_line_name" placeholder="ex.&mdash;Johuri Moholla" required>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="area_name">4. Area Name</label>
    <input name="area_name" type="text" class="form-control" id="area_name" placeholder="ex.&mdash; Shyamoli" required>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="landmark">5. Landmark</label>
    <input name="landmark" type="text" class="form-control" id="landmark" placeholder="ex.&mdash; Shyamoli Club" required>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="thana">6. Thana</label>
    <input name="thana" type="text" class="form-control" id="thana" placeholder="ex.&mdash; Adabor" required>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="ward">7. Ward</label>
    <input name="ward" type="text" class="form-control" id="ward" placeholder="ex.&mdash; 03" required>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="city_corporation">8. City Corporation: </label>
    <select class="form-control" name="city_corporation" id="city_corporation" required>
      <option value="">Select &mdash; City Corporation</option>
      <option value="Dhaka &mdash; North City Corporation">Dhaka &mdash; North City Corporation</option>
      <option value="Dhaka &mdash; South City Corporation">Dhaka &mdash;  South City Corporation</option>
    </select>
  </div>

</fieldset>
<br/>

<fieldset style="background: lightgreen; padding:1%;">
	<h4>B. Youth Information !</h4>

  <div class="form-group col-sm-12 col-md-8">
    <label for="youth_name">9. Name of Youth: </label>
    <input name="youth_name" type="text" class="form-control" id="youth_name" placeholder="ex. &mdash; Mr. Abdur Rahman" required>
  </div>
  <div class="form-group col-sm-12 col-md-4">
    <label for="birthdate">10. Date of Birth</label>
    <input name="birthdate" type="date" class="form-control" id="birthdate" required>
  </div>
  <div class="form-group col-sm-12 col-md-5">
    <label for="sex">11. Sex </label><br/>
		<label class="radio-inline">
		  <input name="sex" type="radio" id="sex" value="Male"> Male
		</label>
		<label class="radio-inline">
		  <input name="sex" type="radio" id="sex" value="Female"> Female
		</label>
		<label class="radio-inline">
		  <input name="sex" type="radio" id="sex" value="Transgender"> Transgender
		</label>
  </div>

  <div class="form-group col-sm-12 col-md-7">
    <label for="educational_status">12. Educational Status: </label><br/>
    
		<label class="radio-inline">
		  <input name="educational_status" type="radio" id="educational_status" value="Never Enrolled">1. Never Enrlled
		</label>
		<label class="radio-inline">
		  <input name="educational_status" type="radio" id="educational_status" value="Dropout"> 2. Dropout
		</label>
		<label class="radio-inline">
		  <input name="educational_status" type="radio" id="educational_status" value="Continuing"> 3. Continuing
		</label>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="exampleInputtext1">13. If dropout, Grade completed: </label>
    <input name="grade_completed" type="text" class="form-control" id="grade_completed" placeholder="ex. &mdash; HSC">
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="grade_continuing">14. If continuing, Grade: </label>
    <input name="grade_continuing" type="text" class="form-control" id="grade_continuing" placeholder="ex. &mdash; EIGHT">
  </div>

  <div class="form-group col-sm-12 col-md-4">
    <label for="working_status">15. Working Status</label><br/>
		<label class="radio-inline">
		  <input name="working_status" type="radio" id="working_status" value="Yes"> Yes
		</label>
		<label class="radio-inline">
		  <input name="working_status" type="radio" id="inlineRadio2" value="No"> No
		</label>
  </div>

  <div class="form-group col-sm-12 col-md-8">
    <label for="work_type">15-A. If Yes Type of Work</label>
    <input name="work_type" type="text" class="form-control" id="work_type" placeholder="ex. &mdash; Entry Level">
  </div>

  <div class="form-group col-sm-12 col-md-6">
    <label for="salary">15-B. Salary</label>
    <input name="salary" type="text" class="form-control" id="salary" placeholder="ex. &mdash; 4000tk">
  </div>

  <div class="form-group col-sm-12 col-md-6">
    <label for="company_address">15-C. Company Address</label>
    <input name="company_address" type="text" class="form-control" id="company_address" placeholder="ex. &mdash; 7/e,R-9, Dhanmondi, Dhaka">
  </div>

</fieldset>
<br/>
<fieldset style="background: rgba(120,30,70,0.1);">
  <div class="form-group col-sm-12 col-md-12">
    <label for="disability_type">16. Select Disability </label>
    <select class="form-control" id="disability_type" name="disability_type" required>
      <option value="">Select Disability</option>
      <option value="Hearing">Hearing</option>
      <option value="Visual">Visual</option>
      <option value="Physical">Physical</option>
      <option value="Speech">Speech</option>
      <option value="Psychological">Psychological</option>
      <option value="Otehrs">Otehrs</option>
      <option value="None">None</option>
    </select>
  </div>
</fieldset>
<br/>
<fieldset style="background: lightblue; padding:1%;">
	<h4>C. Family Information !</h4>

  <div class="form-group col-sm-12 col-md-6">
    <label for="mothers_name">17. Mother's Name: </label>
    <input name="mothers_name" type="text" class="form-control" id="mothers_name" placeholder="ex. &mdash; Mrs. Fatema Begum" required>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="fathers_name">18. Father's Name: </label>
    <input name="fathers_name" type="text" class="form-control" id="fathers_name" placeholder="ex. &mdash; Md. Abdullah" required>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="guardian_name">19. Guardian Name (in absence of parents)</label>
    <input name="guardian_name" type="text" class="form-control" id="guardian_name" placeholder="ex. &mdash; Md. Mokbul Hossen" required>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="mothers_occupation">20. Mother's Occupation (code) </label>
		<select class="form-control" name="mothers_occupation" id="mothers_occupation" required>
		  <option value="">Select Occupation</option>
		  <option value="1. Salaried Job">1. Salaried Job</option>
		  <option value="2. Business">2. Business</option>
		  <option value="3. Day Laborer">3. Day Laborer</option>
		  <option value="4. Driver">4. Driver</option>
		  <option value="5. Workshop">5. Workshop</option>
		  <option value="6. House Maid">6. House Maid</option>
		  <option value="7. House Wife">7. House Wife</option>
		  <option value="8. Unemployed">8. Unemployed</option>
		  <option value="9. Others">9. Others</option>
		</select>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="fathers_occupation">21. Father's Occupation (code)</label>
		<select class="form-control" name="fathers_occupation" id="fathers_occupation" required>
		  <option value="">Select Occupation</option>
      <option value="1. Salaried Job">1. Salaried Job</option>
      <option value="2. Business">2. Business</option>
      <option value="3. Day Laborer">3. Day Laborer</option>
      <option value="4. Driver">4. Driver</option>
      <option value="5. Workshop">5. Workshop</option>
      <option value="8. Unemployed">8. Unemployed</option>
      <option value="9. Others">9. Others</option>
		</select>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="youth_contact_number">22-A. Learner's Contact Number</label>
    <input name="youth_contact_number" type="text" class="form-control" id="youth_contact_number" placeholder="ex. &mdahs; +880 XXXX XXXXXX" required>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="father_contact_number">22-B. Father's/Mother's Contact Number</label>
    <input name="father_contact_number" type="text" class="form-control" id="father_contact_number" placeholder="ex. &mdash; +880 XXXX XXXXXX" required>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="mother_contact_number">22-C. Guardian's Contact Number</label>
    <input name="mother_contact_number" type="text" class="form-control" id="mother_contact_number" placeholder="ex. &mdash; +880 XXXX XXXXXX" required>
  </div>
</fieldset>
<br/>
<fieldset style="background: lightgray; padding:1%;">
	<h4>D. Parmanent Address !</h4>

  <div class="form-group col-sm-12 col-md-6">
    <label for="parmanent_village_name">Village Name</label>
    <input name="parmanent_village_name" type="text" class="form-control" id="parmanent_village_name" placeholder="ex. &mash; Udoypur" required>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="parmanent_post_office">Post Office</label>
    <input name="parmanent_post_office" type="text" class="form-control" id="parmanent_post_office" placeholder="ex. &mdash; Chandi Nogor" required>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="parmanent_thana">Thana / Upazilla</label>
    <input name="parmanent_thana" type="text" class="form-control" id="parmanent_thana" placeholder="ex. &mdash; Nilfamari" required>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <label for="parmanent_district">District</label>
    <input name="parmanent_district" type="text" class="form-control" id="parmanent_district" placeholder="ex. &mdash; Rangpur" required>
  </div>

  <div class="form-group col-sm-12 col-md-6">
    <label for="parmanent_division">Division</label>
    <select class="form-control" name="parmanent_division" id="parmanent_division" required>
      <option value="">Select Division !</option>
      <option value="Dhaka">1. &mdash; Dhaka</option>
      <option value="Chattogram">2. &mdash; Chattogram</option>
      <option value="Rajshahi">3. &mdash; Rajshahi</option>
      <option value="Khulna">4. &mdash; Khulna</option>
      <option value="Barishal">5. &mdash; Barishal</option>
      <option value="Sylhet">6. &mdash; Sylhet</option>
      <option value="Rangpur">7. &mdash; Rangpur</option>
      <option value="Mymensingh">8. &mdash; Mymensingh</option>
    </select>
  </div>
  <div class="form-group col-md-6 col-sm-12">
    <label for="profile_picture">Profile Picture </label>
    <input name="profile_picture" type="file" id="profile_picture" value="Upload Profile">
    <p class="help-block" for="profile_picture">JPG, JPEG, PNG Only, Max Size 2MB.</p>
  </div>
</fieldset>
  
  <hr/>

  <div class="form-group checkbox" class="form-group col-sm-12 col-md-6">
    <label>
      <input name="confirmation" id="confirmation" value="confirmation" type="checkbox" validate> All the information are correct !
    </label>
  </div>
  <div class="form-group">
    <button name="profile_picture" type="submit" class="btn btn-primary">Apply to Register !</button>
  </div>
  <br/>
</form>

<!--=====================================================================================-->
			
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