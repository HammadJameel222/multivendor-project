<?php

namespace App\Repositories\User\Auth;

use App\Http\Requests\LoginRequest;
use App\Interfaces\Auth\LoginInterface;
use App\Trait\Auth\HasAuth;

class LoginRepository implements LoginInterface
{
    use HasAuth;
    public function loginView()
    {
        return view('user.screens.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $this->authenticate($request->sanitized());
        return redirect()->route('home');
    }

}
