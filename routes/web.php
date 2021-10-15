<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('book', 'App\Http\Controllers\BookController');// controllerはAPPからパスを記載する必要あり laravel8から