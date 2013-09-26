<?php

class HomeController extends BaseController {
    /** @var \Illuminate\View\View */
    protected $layout = 'layouts.lead-capture';

	public function getIndex()
	{
        $this->layout->with('title', 'Coming Soon!');
        $this->layout->nest('body', 'home.index');
	}

}