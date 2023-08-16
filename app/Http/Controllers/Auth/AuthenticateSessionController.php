<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AuthenticateSessionController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }
}
