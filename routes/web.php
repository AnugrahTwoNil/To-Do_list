<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'user'])->group(function () {
    
});

Route::get('/dashboard', function(){
    return view('dashboard');
});

require __DIR__.'/auth.php';
