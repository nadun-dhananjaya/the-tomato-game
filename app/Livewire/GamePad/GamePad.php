<?php

namespace App\Livewire\GamePad;

use App\Models\Score;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class GamePad extends Component
{
    public $question;
    public $lap = 1;
    public $max_lap = 3;
    public $solution;
    public $score = 0;
    public $user_solution;
    public $error_message = "";
    public $is_next_lap = false;
    public $is_game_over = false;

    public function mount()
    {
        $this->getTomato();
    }

    public function getTomato()
    {
        $this->lap = 0;
        $this->question = "";
        $client = new Client();
        $request = $client->get('https://marcconrad.com/uob/tomato/api.php');
        $response = json_decode($request->getBody()->getContents());
        $this->question = $response->question;
        $this->solution =  $response->solution;
        $this->is_next_lap  = false;
    }

    public function checkAnswer()
    {
        $user_solution = $this->user_solution;
        if ($user_solution != null) {
            if ($this->lap < 3) {
                if ($user_solution > $this->solution) {
                    $this->error_message = $user_solution . " is greater than solution";
                    $this->lap = $this->lap + 1;
                } else if ($user_solution < $this->solution) {
                    $this->error_message = $user_solution . " is less than solution";
                    $this->lap = $this->lap + 1;
                } else {
                    $this->error_message = "";
                    $this->score = $this->score + 5;
                    $this->is_next_lap  = true;
                }
            } else {
                $this->is_game_over  = true;
                $this->saveScore();
            }
        } else {
            $this->error_message = "please enter solution";
        }
    }

    public function saveScore()
    {
        $user_id = Auth::user()->id;
        $userHighestScore = Score::where(
            'user_id',
            $user_id
        )->get();

        if (count($userHighestScore) > 0) {
            $highestScore = $userHighestScore[0]->highest_score;
            if ($this->score > $highestScore) {
                Score::where('user_id', $user_id)->update([
                    'highest_score' => $this->score
                ]);
            }
        } else {
            Score::create([
                'user_id' => $user_id,
                'highest_score' => $this->score
            ]);
        }
    }

    public function render()
    {

        return view('livewire.game-pad.game-pad')->extends('components.layouts.app')->section('slot');
    }
}
