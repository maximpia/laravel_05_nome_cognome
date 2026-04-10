<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

    

    





Route::get('/', [PublicController::class,'home'])->name('Homepage');



Route::get('/chisiamo', [PublicController::class,'chisiamo'])->name('chisiamo');


Route::get('/service', [PublicController::class,'service']  )->name('servizi');




Route::get('/detail/{name}',  [PublicController::class,'detail']

)->name('detail');




Route::get('/contact', [PublicController::class,'contact']  )->name('contact');

Route::post('/contattaci/submit', [PublicController::class,'submit']  )->name('submit');

/* Route::get('/movies', [PublicController::class,'movies'])->name('movies.list'); */