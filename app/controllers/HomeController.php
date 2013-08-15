<?php

class HomeController extends BaseController {

	public function index()
	{
        $this->layout->with('title', 'Coming Soon!');
        $this->layout->nest('body', 'home.index');
	}
}