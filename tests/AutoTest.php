<?php
namespace Tests;

class AutoTest extends \Asgard\Core\Test {
	public function test() {
		$browser = $this->getBrowser();
		$this->assertTrue($browser->get('captcha')->isOK(), 'GET captcha');
		
		$browser = $this->getBrowser();
		$this->assertTrue($browser->get('doc')->isOK(), 'GET doc');
		
		$browser = $this->getBrowser();
		$this->assertTrue($browser->get('doc/introduction')->isOK(), 'GET doc/:page');
		
		$browser = $this->getBrowser();
		$this->assertTrue($browser->get('')->isOK(), 'GET ');
		
		$browser = $this->getBrowser();
		$this->assertTrue($browser->get('about')->isOK(), 'GET about');
		
		$browser = $this->getBrowser();
		$this->assertTrue($browser->get('contact')->isOK(), 'GET contact');
	}
}