		<main role="main">
			


				<!-- Tabs -->
				<div class="container">
					<div class="row">

<!-- / / -->
<form name="message" onsubmit="return localMessage()" class="form-horizontal" action="<?php echo base_url('index.php/Home/SendMessage'); ?>" method="post">
  <div class="form-group">
    <label for="message_sender" class="col-sm-12 col-md-3 col-lg-3 control-label">Enter Email</label>
    <div class="col-sm-12 col-md-9 col-lg-9">
      <input name="message_sender" type="email" class="form-control" id="message_sender" placeholder="ex. &mdash; example@email.com" required>
    </div>
  </div>
  <div class="form-group">
    <label for="message_subject" class="col-sm-12 col-md-3 col-lg-3 control-label">Enter Subject</label>
    <div class="col-sm-12 col-md-9 col-lg-9">
      <input name="message_subject" type="text" class="form-control" id="message_subject" placeholder="Enter The Subject of Message!" required>
    </div>
  </div>
  <div class="form-group">
    <label for="message_body" class="col-sm-12 col-md-3 col-lg-3 control-label">Message Body</label>
    <div class="col-sm-12 col-md-9 col-lg-9">
      <textarea name="message_body" id="message_body" class="form-control" rows="8" placeholder="Type your text...." required> </textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-12 col-md-3 col-lg-3 control-label"></label>
    <div class="col-sm-12 col-md-9 col-lg-9">
      <button onclick="return localMessage()" type="submit" class="btn btn-primary">SEND MESSAGE !</button>
      <?php $msg = $this->session->flashdata('msg'); if(isset($msg)){ echo $msg; } ?>
    </div>
  </div>
</form>
<!-- / / -->						
					</div>
				</div>
				<!-- Tabs -->
				
			
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