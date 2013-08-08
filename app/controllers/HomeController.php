<?php

class HomeController extends BaseController {

	public function index()
	{
        $this->layout->with('title', 'I need a hand in...');
        $this->layout->nest('body', 'home.index');
	}
}