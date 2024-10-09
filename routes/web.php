<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogEx01Controller;

Route::get('/', [BlogEx01Controller::class, 'index']);
Route::get('/about', [BlogEx01Controller::class, 'about']);
Route::get('/article', [BlogEx01Controller::class, 'article']);
Route::get('/contact', [BlogEx01Controller::class, 'contact']);
Route::post('/contact', [BlogEx01Controller::class, 'contactForm']);
