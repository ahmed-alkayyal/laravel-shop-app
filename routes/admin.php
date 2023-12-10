<?php

use App\Http\Controllers\Dashbord\CategoriesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admain.index');
});
Route::resource('categorie', CategoriesController::class);
