<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Auth;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.base', ['title' => 'Login'])]
class Login extends Component
{
    public string $title = 'Login';

    public function render(): View
    {
        return view('livewire.pages.auth.login');
    }
}
