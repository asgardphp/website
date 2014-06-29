<?php
namespace Documentation\Controllers;
use \Michelf\MarkdownExtra;

class DocumentationController extends \Asgard\Http\Controller {
	/**
	 * @Route("doc")
	 */
	public function docIndexAction($request) {
		return $this->docAction($request);
	}

	/**
	 * @Route("doc/:page")
	 */
	public function docAction($request) {
		if(!$request['page'])
			$request['page'] = 'introduction';

		$file = $this->app['config']['docs_path'].'/'.$request['page'].'.md';
		if(!file_exists($file))
			$this->notFound();

		$this->content = $this->app['cache']->fetch('docs/'.$request['page'], function() use($request, $file) {
			$html = MarkdownExtra::defaultTransform(file_get_contents($file));
			return preg_replace('/href="#([^"]+)"/', 'href="doc/'.$request['page'].'#\1"', $html);
		});
		$this->setRelativeView('doc.php');

		$this->breadcrumb = array(
			'Home' => $request->url->to(''),
			'Documentation' => $this->url_for('docIndex'),
		);

		$this->title = array();
		foreach(explode('_', $request['page']) as $page)
			$this->title[] = ucfirst($page);
		$this->title = implode(' > ', $this->title);
	}
}