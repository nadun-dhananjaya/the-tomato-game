<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class SignIn extends Component
{
    public function render()
    {
        return view('livewire.auth.sign-in')->extends('components.layouts.app')->section('slot');
    }
}
