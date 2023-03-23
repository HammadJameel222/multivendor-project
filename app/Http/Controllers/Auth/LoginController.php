<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Interfaces\Auth\LoginInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    protected $service;

    // use after middleware work have been done ....

    // public function __construct()
    // {
    //     $this->middleware(function($request , $next){
    //         $this->service = app(LoginInterface::class);

    //         return $next($request);
    //     });
    // }

    // temporary useage untill middleware work is not done

    public function __construct(LoginInterface $service)
    {
        return $this->service = $service;
    }


    public function loginView()
    {
        return $this->service->loginView();
    }

    public function login(LoginRequest $request)
    {
        return $this->service->login($request);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('login');
    }
}
