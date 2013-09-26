<?php

class AuthController extends BaseController {

    public function getSignup()
    {
        $this->layout->with('title', 'Signup');
        $this->layout->nest('body', 'auth.signup');

    }

    public function getLogin()
    {
        $this->layout->with('title', 'Login');
        $this->layout->nest('body', 'auth.login');
    }

}