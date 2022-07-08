<?php namespace App\Modules\Land\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = ['title' => 'Home Page', 'view' => 'land/home'];
		/*This is function which is used to get view Common Views */
		return view('template/layout', $data);
	}

	public function test()
	{
		/*This is function which is used to get view from Module/Views */
		return mview('Land/land_page', []);
	}

}
