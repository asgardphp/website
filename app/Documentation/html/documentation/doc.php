				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="<?php echo $request->url->to('') ?>">Home</a></li>
									<li><a href="<?php echo $request->url->to('docs') ?>">Documentation</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-3">
							<aside class="sidebar">
								<h4><a href="docs/introduction">Presentation</h4></h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="docs/introduction#introduction">Introduction</a></li>
									<li><a href="docs/introduction#requirements">Requirements</a></li>
								</ul>

								<h4><a href="docs/framework">Framework</a></h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="docs/framework">Project</a></li>
									<li><a href="docs/framework-modules">Modules</a></li>
									<li><a href="docs/framework-generator">Generator</a></li>
									<li><a href="docs/framework-commands">Commands</a></li>
								</ul>

								<h4><a href="docs/http">HTTP</a></h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="docs/http-requestresponse">Request &amp; Response</a></li>
									<li><a href="docs/http-controllers">Controllers</a></li>
									<li><a href="docs/http-utils">Utils</a></li>
									<li><a href="docs/http-commands">Commands</a></li>
								</ul>

								<h4><a href="docs/orm">ORM</a></h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="docs/orm-relations">Relations</a></li>
									<li><a href="docs/orm-datamapper">DataMapper</a></li>
									<li><a href="docs/orm-orm">ORM</a></li>
									<li><a href="docs/orm-ormbehavior">ORM Behavior</a></li>
									<li><a href="docs/orm-commands">Commands</a></li>
								</ul>

								<h4><a href="docs/db">DB</a></h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="docs/db-db">Database</a></li>
									<li><a href="docs/db-dal">DAL</a></li>
									<li><a href="docs/db-schema">Schema</a></li>
									<li><a href="docs/db-commands">Commands</a></li>
								</ul>

								<h4>More</h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="docs/admin">Admin</a></li>
									<li><a href="docs/autoloader">Autoloader</a></li>
									<li><a href="docs/bag">Bag</a></li>
									<li><a href="docs/cache">Cache</a></li>
									<li><a href="docs/config">Config</a></li>
									<li><a href="docs/container">Container</a></li>
									<li><a href="docs/data">Data</a></li>
									<li><a href="docs/email">Email</a></li>
									<li><a href="docs/entity">Entity</a></li>
									<li><a href="docs/entityform">Entity Form</a></li>
									<li><a href="docs/form">Form</a></li>
									<li><a href="docs/hook">Hook</a></li>
									<li><a href="docs/migration">Migration</a></li>
									<li><a href="docs/paginator">Paginator</a></li>
									<li><a href="docs/session">Session</a></li>
									<li><a href="docs/translation-commands">Translation commands</a></li>
									<li><a href="docs/validation">Validation</a></li>
								</ul>
							</aside>
						</div>
						<div class="col-md-9">
						<?php echo $content ?>
						</div>

					</div>

				</div>