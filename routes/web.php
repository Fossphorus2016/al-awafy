<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact/create',[FormController::class,'contact_create'])->name('contact.create');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin/contacts-details', [AdminController::class, 'get_contacts'])->name('contact');
    Route::delete('/admin/contacts-delete/{id}', [AdminController::class, 'contact_delete'])->name('contact.delete');
    Route::get('/admin-news-letter', [AdminController::class, 'get_news_letter'])->name('news.letter');

});
