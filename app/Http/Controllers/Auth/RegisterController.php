<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Trait\Auth\HasAuth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use HasAuth;

    public function registerForm() :View
    {
        return view('user.screens.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->sanitized());
        if($user)
        {
            $this->authenticate([
                'email' => $request->email , 'password' => $request->password
            ]);

            return redirect()->route('home');
        }
        return back();
    }
}
