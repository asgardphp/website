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
		<div class="col-md-12">

			<h2 class="shorter">Libraries</h2>
			<p>Asgard can be used as a framework AND as a set of decoupled-libraries. Hence you can pick any of the library you need without having to install the whole framework.</p>

			<hr>

			<?php $this->container['html']->codeCSS('tbody td { height:30px; }') ?>
			<table width="90%" style="text-align:left">
			<thead style="font-weight:bold; color:#222">
				<tr>
					<td width="15%">Status</td>
					<td width="15%">Name</td>
					<td width="15%">Composer</td>
					<td width="50%">Description</td>
					<td width="5%">Doc</td>
				</tr>
			</thead>
			<tbody style="text-align:left">
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/autoloader"><img src="https://travis-ci.org/asgardphp/autoloader.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/autoloader">Autoloader</a></td>
					<td><a href="https://packagist.org/packages/asgard/autoloader">asgard/autoloader</a></td>
					<td>A PSR-4 autoloader with additionnal capabilities.</td>
					<td><a href="docs/autoloader">Doc</a></td>
				</tr>
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/cache"><img src="https://travis-ci.org/asgardphp/cache.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/cache">Cache</a></td>
					<td><a href="https://packagist.org/packages/asgard/cache">asgard/cache</a></td>
					<td>A wraper for cache drivers.</td>
					<td><a href="docs/cache">Doc</a></td>
				</tr>
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/common"><img src="https://travis-ci.org/asgardphp/common.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/common">Common</a></td>
					<td><a href="https://packagist.org/packages/asgard/common">asgard/common</a></td>
					<td>Provides various functions to other packages.</td>
				</tr>
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/config"><img src="https://travis-ci.org/asgardphp/config.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/config">Config</a></td>
					<td><a href="https://packagist.org/packages/asgard/config">asgard/config</a></td>
					<td>Manage the containerlication configuration.</td>
					<td><a href="docs/config">Doc</a></td>
				</tr>
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/console"><img src="https://travis-ci.org/asgardphp/console.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/console">Console</a></td>
					<td><a href="https://packagist.org/packages/asgard/console">asgard/console</a></td>
					<td>Console library for Asgard commands.</td>
				</tr>
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/container"><img src="https://travis-ci.org/asgardphp/container.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/container">Container</a></td>
					<td><a href="https://packagist.org/packages/asgard/container">asgard/container</a></td>
					<td>Provides a services container.</td>
					<td><a href="docs/container">Doc</a></td>
				</tr>
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/core"><img src="https://travis-ci.org/asgardphp/core.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/core">Core</a></td>
					<td><a href="https://packagist.org/packages/asgard/core">asgard/core</a></td>
					<td>The core of the Asgard framework.</td>
				</tr>
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/db"><img src="https://travis-ci.org/asgardphp/db.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/db">Db</a></td>
					<td><a href="https://packagist.org/packages/asgard/db">asgard/db</a></td>
					<td>Contains a schema builder and a database abstraction layer class.</td>
					<td><a href="docs/db">Doc</a></td>
				</tr>
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/debug"><img src="https://travis-ci.org/asgardphp/debug.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/debug">Debug</a></td>
					<td><a href="https://packagist.org/packages/asgard/debug">asgard/debug</a></td>
					<td>Catches errors and provides debugging information.</td>
					<td><a href="docs/debug">Doc</a></td>
				</tr>
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/email"><img src="https://travis-ci.org/asgardphp/email.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/email">Email</a></td>
					<td><a href="https://packagist.org/packages/asgard/email">asgard/email</a></td>
					<td>A wraper for email drivers.</td>
					<td><a href="docs/email">Doc</a></td>
				</tr>
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/entity"><img src="https://travis-ci.org/asgardphp/entity.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/entity">Entity</a></td>
					<td><a href="https://packagist.org/packages/asgard/entity">asgard/entity</a></td>
					<td>To define and manage persistence-agnostic entities.</td>
					<td><a href="docs/entity">Doc</a></td>
				</tr>
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/file"><img src="https://travis-ci.org/asgardphp/file.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/file">File</a></td>
					<td><a href="https://packagist.org/packages/asgard/file">asgard/file</a></td>
					<td>Classes to handle files as objects in PHP.</td>
					<td><a href="docs/file">Doc</a></td>
				</tr>
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/form"><img src="https://travis-ci.org/asgardphp/form.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/form">Form</a></td>
					<td><a href="https://packagist.org/packages/asgard/form">asgard/form</a></td>
					<td>To build complex HTML forms and handle their inputs.</td>
					<td><a href="docs/form">Doc</a></td>
				</tr>
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/hook"><img src="https://travis-ci.org/asgardphp/hook.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/hook">Hook</a></td>
					<td><a href="https://packagist.org/packages/asgard/hook">asgard/hook</a></td>
					<td>Creates hooks to which you can attach callbacks.</td>
					<td><a href="docs/hook">Doc</a></td>
				</tr>
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/http"><img src="https://travis-ci.org/asgardphp/http.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/http">Http</a></td>
					<td><a href="https://packagist.org/packages/asgard/http">asgard/http</a></td>
					<td>Handles the HTTP requests, routing, controllers and responses.</td>
					<td><a href="docs/http">Doc</a></td>
				</tr>
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/migration"><img src="https://travis-ci.org/asgardphp/migration.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/migration">Migration</a></td>
					<td><a href="https://packagist.org/packages/asgard/migration">asgard/migration</a></td>
					<td>To build, manage and execute migrations.</td>
					<td><a href="docs/migration">Doc</a></td>
				</tr>
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/orm"><img src="https://travis-ci.org/asgardphp/orm.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/orm">Orm</a></td>
					<td><a href="https://packagist.org/packages/asgard/orm">asgard/orm</a></td>
					<td>To store and manipulate entities in the database.</td>
					<td><a href="docs/orm">Doc</a></td>
				</tr>
				<tr>
					<td><a href="https://travis-ci.org/asgardphp/validation"><img src="https://travis-ci.org/asgardphp/validation.svg?branch=master" alt="Travis"></a></td>
					<td><a href="https://github.com/asgardphp/validation">Validation</a></td>
					<td><a href="https://packagist.org/packages/asgard/validation">asgard/validation</a></td>
					<td>A complete library for validating inputs.</td>
					<td><a href="docs/validation">Doc</a></td>
				</tr>
			</tbody>
			</table>
		</div>
	</div>


</div>