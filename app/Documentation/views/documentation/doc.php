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
								<h4><a href="doc/introduction">Getting started</h4></h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="doc/introduction#introduction">Introduction</a></li>
									<li><a href="doc/introduction#requirements">Requirements</a></li>
								</ul>

								<h4><a href="doc/framework">Framework</a></h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="doc/framework#installation">Installation</a></li>
									<li><a href="doc/framework#configuration">Configuration</a></li>
									<li><a href="doc/framework#structure">Project structure</a></li>
									<li><a href="doc/framework#structure">Bundles</a></li>
									<li><a href="doc/framework#services">Default services</a></li>
									<li><a href="doc/testing">Testing</a></li>
									<li><a href="doc/commands">Commands</a></li>
								</ul>

								<h4><a href="doc/http">HTTP</a></h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="doc/http-requestresponse">Request &amp; Response</a></li>
									<li><a href="doc/http-controllers">Controllers</a></li>
									<li><a href="doc/http-commands">Commands</a></li>
								</ul>

								<h4><a href="doc/entity">Entity</a></h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="doc/entity-entity">Entity Definition</a></li>
									<li><a href="doc/entity-validation">Validation</a></li>
									<li><a href="doc/entity-behaviors">Behaviors</a></li>
								</ul>

								<h4><a href="doc/orm">ORM</a></h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="doc/orm-relations">Relations</a></li>
									<li><a href="doc/orm-datamapper">DataMapper</a></li>
									<li><a href="doc/orm-ormbehavior">ORM Behavior</a></li>
									<li><a href="doc/orm-commands">Commands</a></li>
								</ul>

								<h4><a href="doc/db">Db</a></h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="doc/db-db">Database</a></li>
									<li><a href="doc/db-dal">DAL</a></li>
									<li><a href="doc/db-schema">Schema</a></li>
									<li><a href="doc/db-commands">Commands</a></li>
								</ul>

								<h4><a href="doc/form">Form</a></h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="doc/form-form">Form</a></li>
									<li><a href="doc/form-entity">Entity Form</a></li>
									<li><a href="doc/form-dynamic">Dynamic Group</a></li>
								</ul>

								<h4>More</h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="doc/admin">Admin</a></li>
									<li><a href="doc/autoloader">Autoloader</a></li>
									<li><a href="doc/bag">Bag</a></li>
									<li><a href="doc/cache">Cache</a></li>
									<li><a href="doc/config">Config</a></li>
									<li><a href="doc/container">Container</a></li>
									<li><a href="doc/data">Data</a></li>
									<li><a href="doc/email">Email</a></li>
									<li><a href="doc/hook">Hook</a></li>
									<li><a href="doc/migration">Migration</a></li>
									<li><a href="doc/validation">Validation</a></li>
								</ul>
							</aside>
						</div>
						<div class="col-md-9">
						<?php echo $content ?>
						</div>

					</div>

				</div>