
				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Contact Us</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Contact Us</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-6">

							<div class="alert alert-success hidden" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger hidden" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
							</div>

							<h2 class="short"><strong>Contact</strong> Us</h2>
							<?php $this->getFlash()->showAll() ?>
							<?php $form->open() ?>
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Your name *</label>
											<?php echo $form['name']->def(array('attrs'=>array('class'=>'form-control'))) ?>
										</div>
										<div class="col-md-6">
											<label>Your email address *</label>
											<?php echo $form['email']->def(array('attrs'=>array('class'=>'form-control'))) ?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Subject</label>
											<?php echo $form['subject']->def(array('attrs'=>array('class'=>'form-control'))) ?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Message *</label>
											<?php echo $form['message']->textarea(array('attrs'=>array('class'=>'form-control', 'rows'=>10))) ?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<img src="http://127.0.0.1/asgardwebsite/web/captcha" alt="" style="margin:10px">
										<input type="text" name="contact[captcha]" value="" id="contact-captcha" class="error">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
									</div>
								</div>
							<?php $form->close() ?>
						</div>
						<div class="col-md-6">

							<h4 class="push-top">Get in <strong>touch</strong></h4>
							<p>For requests or issues related to Asgard, please use <a href="http://github.com/asgardphp/">github.com/asgardphp/</a>.</p>


						</div>

					</div>

				</div>