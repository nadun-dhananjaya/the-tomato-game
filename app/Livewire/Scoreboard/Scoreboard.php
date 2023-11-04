<?php

namespace App\Livewire\Scoreboard;

use Livewire\Component;

class Scoreboard extends Component
{
    public function render()
    {
        return view('livewire.scoreboard.scoreboard')->extends('components.layouts.app')->section('slot');
    }
}
