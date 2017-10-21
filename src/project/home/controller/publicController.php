<?php 
	use KintoUn\core\Controller;
	
	class publicController extends Controller{

		protected $table = array("users");

		public function indexAction(){
			$e = $this->users->findAll()->exec();

		    $this->render(array(
				"message"	=>	'Hello World! C\'est la partie public',
			));	
		}

		public function testAction(){
		    $this->render(array(
				"message"	=>	'Hello World! C\'est la partie test',
			));
		}
	}
?>