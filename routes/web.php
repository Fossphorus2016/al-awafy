<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact/create',[FormController::class,'contact_create'])->name('contact.create');
Route::post('/news-letter/create',[FormController::class,'news_letter_create'])->name('news.letter.create');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin/contacts-details', [AdminController::class, 'get_contacts'])->name('contact');
    Route::delete('/admin/contacts-delete/{id}', [AdminController::class, 'contact_delete'])->name('contact.delete');

    Route::get('/admin-news-letter', [AdminController::class, 'get_news_letter'])->name('news.letter');
    Route::delete('/admin/news-letter-delete/{id}', [AdminController::class, 'news_letter_delete'])->name('news.letter.delete');


});
