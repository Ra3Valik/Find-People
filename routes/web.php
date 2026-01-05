<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::get( '/', function () {
    return view( 'pages.welcome', [
        'canRegister' => Features::enabled( Features::registration() ),
    ] );
} )->name( 'home' );

Route::view( 'dashboard', 'pages.dashboard' )
    ->middleware( ['auth', 'verified'] )
    ->name( 'dashboard' );

require __DIR__ . '/settings.php';
