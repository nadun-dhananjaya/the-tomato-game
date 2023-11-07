<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\SignIn;
use App\Livewire\GamePad\GamePad;
use App\Livewire\Home\HomePage;
use App\Livewire\Scoreboard\Scoreboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/logout', function () {
    Auth::logout();
    return redirect(route('login'));
});
Route::get('/', function () {
    return redirect(route('login'));
});

Route::get('/signup', Register::class)->name('signup');


Route::middleware('auth')->group(function () {
    Route::get('/home', HomePage::class)->name('home-page');
    Route::get('/game-pad', GamePad::class)->name('game-pad');
    Route::get('/score-board', Scoreboard::class)->name('score-board');
    Route::get('/dashboard', function () {
        return redirect(route('home-page'));
    });
});



require __DIR__ . '/auth.php';
