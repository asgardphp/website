<?php
namespace General\Controllers;

class DefaultController extends \Asgard\Http\Controller {
	/**
	 * @Route("")
	 */
	public function indexAction(\Asgard\Http\Request $request) {
	}

	/**
	 * @Route("libraries")
	 */
	public function librariesAction($request) {
	}

	/**
	 * @Route("about")
	 */
	public function aboutAction($request) {
		$this->form = new \Asgard\Form\Form('contact', array(), $request);
		$this->form['name'] = new \Asgard\Form\Fields\TextField(array(
			'validation' => 'required'
		));
		$this->form['email'] = new \Asgard\Form\Fields\TextField(array(
			'validation' => array('required', 'email')
		));
		$this->form['subject'] = new \Asgard\Form\Fields\TextField();
		$this->form['message'] = new \Asgard\Form\Fields\TextField(array(
			'validation' => 'required'
		));
		$this->form['captcha'] = new \Asgard\Captcha\Libs\CaptchaField();

		if($this->form->sent()) {
			if($errors = $this->form->errors())
				$this->getFlash()->addError($errors);
			else {
				$name = $this->form['name']->value();
				$emailAddr = $this->form['email']->value();
				$subject = $this->form['subject']->value();
				$message = $this->form['message']->value();

				$email = $this->app['email'];
				$email->send(function($msg) use($emailAddr, $subject, $message, $name) {
					$msg->to('michel@hognerud.net');
					$msg->from($emailAddr);
					$msg->subject($subject);
					$msg->text('Name: '.$name."\n".$message);
				});

				$this->getFlash()->addSuccess('Thank you for your message.');
			}
		}
	}

	/**
	 * @Route("download")
	 */
	public function downloadAction($request) {
	}

	/**
	 * @Route("community")
	 */
	public function communityAction($request) {
	}

	public function _404Action() {
	}

	public function maintenanceAction() {
	}
	
	public static function layout($content) {
		return \Asgard\Http\PHPTemplate::renderFile(dirname(__DIR__).'/html/default/layout.php', array('content'=>$content));
	}
}