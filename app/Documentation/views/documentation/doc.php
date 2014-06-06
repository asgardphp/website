				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="<?php echo $request->url->to('') ?>">Home</a></li>
									<li><a href="<?php echo $request->url->to('doc') ?>">Documentation</a></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2><?php echo $title ?></h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-3">
							<aside class="sidebar">

								<h4>Introduction</h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="#">Introduction</a></li>
									<li><a href="#">Requirements</a></li>
									<li><a href="#">Installation</a></li>
									<li><a href="#">Configuration</a></li>
									<li><a href="#">Project structure &amp; Bundles</a></li>
								</ul>

								<h4>Core</h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="#">App/Service container</a></li>
									<li><a href="#">Config</a></li>
									<li><a href="#">Autoloader</a></li>
									<li><a href="#">Console</a></li>
								</ul>

								<h4>HTTP</h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="#">Request lifecycle</a></li>
									<li><a href="#">Request</a></li>
									<li><a href="#">Response</a></li>
									<li><a href="#">Controllers</a></li>
									<!-- <li><a href="#">Views</a></li>
									<li><a href="#">Routing</a></li>
									<li><a href="#">Exceptions &amp; Errors</a></li>
									<li><a href="#">Filters</a></li> -->
								</ul>

								<h4>Entities</h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="#">Entity Definition</a></li>
									<li><a href="#">Validation</a></li>
									<li><a href="#">Behaviors</a></li>
								</ul>

								<h4>Hooks</h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="#">Hooks</a></li>
									<li><a href="#">Hookable</a></li>
								</ul>

								<h4>Forms</h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="#">Form</a></li>
									<li><a href="#">Entity Form</a></li>
									<li><a href="#">Dynamic Group</a></li>
								</ul>

								<h4>ORM</h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="#">DataMapper</a></li>
									<li><a href="#">ORM Behavior</a></li>
									<li><a href="#">ORM Migrations</a></li>
									<li><a href="#">Console</a></li>
								</ul>

								<h4>Database</h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="#">Database</a></li>
									<li><a href="#">DAL</a></li>
									<li><a href="#">Schema</a></li>
									<li><a href="#">Console</a></li>
								</ul>

								<h4>Testing</h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="#">Unit Tests</a></li>
									<li><a href="#">Functionnal Tests</a></li>
									<li><a href="#">Tests Generator</a></li>
								</ul>

								<h4><a href="">Files</a></h4>

								<h4><a href="">Migrations</a></h4>

								<h4><a href="">Debug</a></h4>

								<h4><a href="">Validation</a></h4>

								<h4><a href="">Email</a></h4>
							</aside>
						</div>
						<div class="col-md-9">
						<?php echo $content ?>
						</div>

					</div>

				</div>