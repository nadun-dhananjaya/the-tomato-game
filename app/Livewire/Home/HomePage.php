<?php

namespace App\Livewire\Home;

use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{

    #[Title('Home - The Tomato Game')]
    public function render()
    {
        return view('livewire.home.home-page')->extends('components.layouts.app')->section('slot');
    }
}
