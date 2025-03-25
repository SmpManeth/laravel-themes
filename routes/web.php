<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('themes.' . session('theme', 'default') . '.home')->with('activeTheme', session('theme', 'default'));
})->name('home');

Route::post('/change-theme', function (Request $request) {
    session(['theme' => $request->theme]);
    return redirect()->route('home');
})->name('theme.change');



require __DIR__.'/auth.php';
