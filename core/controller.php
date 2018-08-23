<?php
class controller 
{
	public function loadView($viewName, $viewData = []) 
	{
		extract($viewData);
		require_once 'views/'.$viewName.'.php';
	}
}