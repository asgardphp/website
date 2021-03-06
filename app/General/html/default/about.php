<section class="page-top">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="">Home</a></li>
					<li class="active">About</li>
				</ul>
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

							<h2 class="short"><strong>Contact</strong></h2>
							<?php $this->getFlash()->showAll() ?>
							<?php echo $form->open() ?>
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
										<img src="captcha" alt="" style="margin:10px">
										<input type="text" name="contact[captcha]" value="" id="contact-captcha" class="error">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
									</div>
								</div>
							<?php echo $form->close() ?>
						</div>

						<div class="col-md-6">

							<h2 class="shorter">Michel <strong>Hognerud</strong></h2>
							<h4>Author of Asgard</h4>

							<p>I'm a <?=floor((time()-mktime(0, 0, 0, 9, 20, 1988))/(3600*24*365))?> years old developper, working somewhere in Europe as a freelance when I'm not travelling.</p>

							<h4>Why Asgard?</h4>
							<p>As a freelance I have always looked for ways to optimize my workflow when building web applications. Hence, I started working on a new framework in 2011. Sure it's a lot of work but I'm pretty excited with the result.</p>
							<p>What distinguishes Asgard from many other frameworks, is the <b>strong focus on RAD</b> (rapid app. dev.). Regular tasks such as building new controllers/entities, routing and migrations, among others, are now a lot faster and convenient to do.</p>
							<p>The next objective is to give Asgard more stability, with more and more tests and a good documentation.</p>
							<p>If you enjoy using Asgard and want to help improving it, please see <a href="community">the Community page</a>.</p>

						</div>
	</div>


</div>