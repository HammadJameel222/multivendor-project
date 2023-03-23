<?php

namespace App\Interfaces\Auth;

use App\Http\Requests\LoginRequest;

interface LoginInterface
{
    public function loginView();
    public function login(LoginRequest $request);

}
