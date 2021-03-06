<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlShortenerController;


Route::get('/', function () {
    return view('urlshortener');
});


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// redirect to original url.


Route::get('/u/{any}', [UrlShortenerController::class, 'handle']);


// Store shorten url.


Route::post('/url/shorten', [UrlShortenerController::class, 'store']);
