<?php

namespace App\Livewire\Scoreboard;

use Livewire\Attributes\Title;
use Livewire\Component;


class Scoreboard extends Component
{
    #[Title('Score board')]
    public function render()
    {
        return view('livewire.scoreboard.scoreboard')->extends('components.layouts.app')->section('slot');
    }
}
