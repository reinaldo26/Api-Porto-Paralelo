<?php
class storeController extends controller 
{
	public function index() 
	{
		$data = [];
		$url = isset($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:'';
		$url = explode("?id=", $url);
		$id = array_pop($url);
	
		if(!empty($id)) $data['id'] = $id;

		$this->loadView('store', $data);
	} 		
}