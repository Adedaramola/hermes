<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

final class AuthenticateSessionController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }
}
