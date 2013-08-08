<?php

class BaseController extends Controller {
    /** @var \Illuminate\View\View */
    public $layout = 'layouts.default';

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout() {
		if(!is_null($this->layout)) {
			$this->layout = View::make($this->layout);
            /* Current route name e.g. "HomeController@index" */
            $route = Route::currentRouteAction();
            /* Convert CamelCase to dash-seperate e.g. "home-controller@index" */
            $route = strtolower(preg_replace('/([a-z])([A-Z])/', '$1-$2', $route));
            /* Get rid of @ in between e.g. "home-controller index" */
            $route = str_replace('@', ' ', $route);
            $this->layout->with('route', $route);
		}
	}

    public function missingMethod($parameters)
    {

    }
}