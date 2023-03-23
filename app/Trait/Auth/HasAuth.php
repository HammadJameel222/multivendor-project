<?php

namespace App\Trait\Auth;

use Illuminate\Support\Facades\Auth;

trait HasAuth
{
    public function authenticate($credentials)
    {
        if(Auth::attempt($credentials,false))
        {
            if(Auth::login(Auth::getLastAttempted()))
            {
                return true;
            }
        }
        return false;
    }
}
