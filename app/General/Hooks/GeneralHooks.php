<?php
namespace General\Hooks;

class GeneralHooks extends \Asgard\Hook\HooksContainer {
	/**
	 * @Hook("Asgard.Http.Start")
	 */
	public static function maintenance(\Asgard\Hook\HookChain $chain, \Asgard\Http\Request $request) {
		if($chain->app['kernel']['env'] == 'prod' && file_exists($chain->app['kernel']['root'].'/storage/maintenance')) {
			$controller = new \General\Controllers\DefaultController($chain->app);
			return $controller->run('maintenance', $request);
		}
	}

	/**
	 * @Hook("Asgard.Http.Controller")
	 */
	public static function pagelayout(\Asgard\Hook\HookChain $chain, \Asgard\Http\Controller $controller) {
		if(!$chain->app['html']->getTitle())
			$chain->app['html']->setTitle('Asgard PHP Framework');
		$controller->layout = array('\General\Controllers\DefaultController', 'layout');

		$controller->addFilter(new \Asgard\Http\Filters\PageLayout(null, $chain->app['kernel']['root'].'/app/general/views/html.php'));
		$controller->addFilter(new \Asgard\Http\Filters\JSONEntities);
	}

	/**
	 * @Hook("Asgard.Http.Exception.Asgard\Http\Exceptions\NotFoundException")
	 */
	public static function hook404Exception(\Asgard\Hook\HookChain $chain, \Exception $exception, \Asgard\Http\Response &$response, \Asgard\Http\Request $request) {
		$controller = new \General\Controllers\DefaultController($chain->app);
		$response = $controller->run('_404', $chain->app, $request)->setCode(404);
	}

	/**
	 * @Hook("Asgard.Http.Output")
	 * @Priority(1000)
	 */
	public static function gzip(\Asgard\Hook\HookChain $chain, \Asgard\Http\Response $response, \Asgard\Http\Request $request) {
		if(!strstr($request->server['HTTP_ACCEPT_ENCODING'], 'gzip') || !$response->getContent())
			return;

		$output = gzencode($response->getContent());
		$response
			->setContent($output)
			->setHeader('Content-Encoding', 'gzip')
			->setHeader('Content-Length', strlen($output))
			->setHeader('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
			->setHeader('Pragma', 'no-cache');
	}
}