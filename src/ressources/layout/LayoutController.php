<?php

namespace kintoUnSkeleton\src\ressources\layout;

use KintoUn\core\Controller;

class LayoutController extends Controller{

	protected $table = array();
	
	public function layout(){

		$data["adminPublic"] = array(
			
		);

		$data["basePublic"] = array(
			
		);

		return $data;
	}
}