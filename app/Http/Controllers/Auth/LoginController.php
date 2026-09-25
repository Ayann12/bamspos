<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class LoginController extends Controller
{
    public function index()
    {
        return View('auth.login');
    }

    public function handleLogin(Request $request)
    {
        dd($request->all());
    }
}
