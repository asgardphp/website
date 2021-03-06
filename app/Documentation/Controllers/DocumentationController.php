<?php
namespace Documentation\Controllers;
use \Michelf\MarkdownExtra;

class DocumentationController extends \Asgard\Http\Controller {
	/**
	 * @Route("docs")
	 */
	public function docIndexAction($request) {
		return $this->docsAction($request);
	}

	/**
	 * @Route("docs/:page")
	 */
	public function docsAction($request) {
		if(!$request['page'])
			return $this->response->redirect($this->url_for('docs', ['page'=>'introduction']));

		$docspath = $this->container['config']->has('docs_path') ? $this->container['config']['docs_path']:'docs';
		$file = $docspath.'/'.$request['page'].'.md';
		if(!file_exists($file))
			$this->notFound();

		$this->content = $this->container['cache']->fetch('docs/'.$request['page'], function() use($request, $file) {
			$markdown = file_get_contents($file);
			$markdown = preg_replace('/```(.*?)\n(.*?)```/s', '<pre class="lang-$1"><code>$2</code></pre>', $markdown);
			$markdown = str_replace('](img/', '](misc/docs/img/', $markdown);
			$html = MarkdownExtra::defaultTransform($markdown);
			return preg_replace('/href="#([^"]+)"/', 'href="docs/'.$request['page'].'#\1"', $html);
		});

		$this->breadcrumb = array(
			'Home' => $request->url->to(''),
			'Documentation' => $this->url_for('docIndex'),
		);

		$this->title = array();
		foreach(explode('_', $request['page']) as $page)
			$this->title[] = ucfirst($page);
		$this->title = implode(' > ', $this->title);
		
		$this->view = 'doc';
	}
}