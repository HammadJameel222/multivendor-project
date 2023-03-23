<?php

namespace App\Repositories\Admin\Auth;

use App\Interfaces\Auth\LoginInterface;

class LoginRepository implements LoginInterface
{
    public function loginView()
    {
        // return view('user.screens.auth.login');
    }
}
