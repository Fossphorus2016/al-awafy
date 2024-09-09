<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('contact');
    } else {
        return redirect()->route('en.home');
    }
});



Route::prefix('En')->group(function () {
    Route::get('/about', function () {
        return view('en.about_us');
    })->name('en.about');
    Route::get('/brands', function () {
        return view('en.our_brand');
    })->name('en.brands');
    Route::get('/home', function () {
        return view('en.home');
    })->name('en.home');
    Route::get('/contact-us', function () {
        return view('en.contact_us');
    })->name('en.contact');
    Route::get('/our-products', function () {
        return view('en.our_products');
    })->name('en.our.products');
    Route::get('/blogs', function () {
        return view('en.blogs');
    })->name('en.blogs');
});


Route::prefix('Ar')->group(function () {
    Route::get('/about', function () {
        return view('ar.about_us');
    })->name('ar.about');
    Route::get('/home', function () {
        return view('ar.home');
    })->name('ar.home');
    Route::get('/contact-us', function () {
        return view('ar.contact_us');
    })->name('ar.contact');
    Route::get('/our-products', function () {
        return view('ar.our_products');
    })->name('ar.our.products');
    Route::get('/blogs', function () {
        return view('ar.blogs');
    })->name('ar.blogs');
});


Route::prefix('Fr')->group(function () {
    Route::get('/about', function () {
        return view('fr.about_us');
    })->name('fr.about');
    Route::get('/home', function () {
        return view('fr.home');
    })->name('fr.home');
    Route::get('/contact-us', function () {
        return view('fr.contact_us');
    })->name('fr.contact');
    Route::get('/our-products', function () {
        return view('fr.our_products');
    })->name('fr.our.products');
    Route::get('/blogs', function () {
        return view('fr.blogs');
    })->name('fr.blogs');
});







Route::post('/contact/create', [FormController::class, 'contact_create'])->name('contact.create');
Route::post('/news-letter/create', [FormController::class, 'news_letter_create'])->name('news.letter.create');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/contacts-details', [AdminController::class, 'get_contacts'])->name('contact');
    Route::delete('/admin/contacts-delete/{id}', [AdminController::class, 'contact_delete'])->name('contact.delete');
    Route::get('/admin-news-letter', [AdminController::class, 'get_news_letter'])->name('news.letter');
    Route::delete('/admin/news-letter-delete/{id}', [AdminController::class, 'news_letter_delete'])->name('news.letter.delete');
});
