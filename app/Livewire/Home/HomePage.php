<?php

namespace App\Livewire\Home;

use Livewire\Component;

class HomePage extends Component
{

    public function render()
    {
        return view('livewire.home.home-page')->extends('components.layouts.app')->section('slot');
    }
}
