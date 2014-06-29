<?php
namespace Tests;

class AutoTest extends \Asgard\Http\Test {
	public function test() {
		$browser = $this->getBrowser();
		$this->assertTrue($browser->get('captcha')->isOK(), 'GET captcha');
		
		$browser = $this->getBrowser();
		$this->assertTrue($browser->get('docs')->isOK(), 'GET doc');
		
		$browser = $this->getBrowser();
		$this->assertTrue($browser->get('docs/introduction')->isOK(), 'GET docs/:page');
		
		$browser = $this->getBrowser();
		$this->assertTrue($browser->get('')->isOK(), 'GET ');
		
		$browser = $this->getBrowser();
		$this->assertTrue($browser->get('about')->isOK(), 'GET about');
		
		$browser = $this->getBrowser();
		$this->assertTrue($browser->get('community')->isOK(), 'GET community');
	}
}