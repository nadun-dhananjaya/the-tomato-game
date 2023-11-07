<?php

namespace App\Livewire\Scoreboard;

use App\Models\Score;
use Livewire\Attributes\Title;
use Livewire\Component;


class Scoreboard extends Component
{
    public function loadScoreBoard()
    {
        return Score::select('users.name', 'scores.highest_score')->join('users', 'users.id', 'scores.user_id')->get();
    }
    #[Title('Score board')]
    public function render()
    {
        return view('livewire.scoreboard.scoreboard', [
            'scores' => $this->loadScoreBoard()
        ])->extends('components.layouts.app')->section('slot');
    }
}
