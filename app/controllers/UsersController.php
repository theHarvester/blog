<?php

class UsersController extends BaseController {
    public function getLogin()
    {
        return View::make('user.login');
    }
}