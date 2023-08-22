<?php

namespace App\Livewire\Components;

use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class LoginForm extends Component
{
    public $form = [];

    protected $rules = [
        'form.username' => 'required|string|max:255|exists:users,username',
        'form.password' => 'required|string|max:255',
    ];

    public function authenticate(StatefulGuard $guard)
    {
        $this->resetErrorBag();

        if ($guard->attempt([
            $this->form['username'],
            $this->form['password']
        ])) {
            return Redirect::intended(RouteServiceProvider::HOME);
        }
    }

    public function render()
    {
        return view('livewire.components.login-form');
    }
}
