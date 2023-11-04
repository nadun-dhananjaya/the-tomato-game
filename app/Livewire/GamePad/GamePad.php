<?php

namespace App\Livewire\GamePad;

use Livewire\Component;

class GamePad extends Component
{
    public function render()
    {
        return view('livewire.game-pad.game-pad')->extends('components.layouts.app')->section('slot');
    }
}
