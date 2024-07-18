<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin/contacts-details', [AdminController::class, 'get_contacts'])->name('contact');
    Route::get('/admin-news-letter', [AdminController::class, 'get_news_letter'])->name('news.letter');

});
