<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminBrandController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AlawafyController;
use App\Http\Controllers\AlyoumController;
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
    Route::get('/brand-alawafy', function () {
        return view('en.our_brand');
    })->name('en.brands');
    Route::get('/brand-crico', function () {
        return view('en.our_brand_crico');
    })->name('en.brands_crico');
    Route::get('/brand-alyoum', function () {
        return view('en.our_brand_alyoum');
    })->name('en.brands_alyoum');
    Route::get('/home', function () {
        return view('en.home');
    })->name('en.home');
    Route::get('/contact-us', function () {
        return view('en.contact_us');
    })->name('en.contact');
    Route::get('/our-products', function () {
        return view('en.our_products');
    })->name('en.our.products');
    Route::get('/activities', function () {
        return view('en.activities');
    })->name('en.activities');
    Route::get('/terms_condition', function () {
        return view('en.terms_condition');
    })->name('en.terms_condition');
    Route::get('/privacy_policy', function () {
        return view('en.privacy_policy');
    })->name('en.privacy_policy');
});


Route::prefix('Ar')->group(function () {
    Route::get('/about', function () {
        return view('ar.about_us');
    })->name('ar.about');
    Route::get('/brand-alawafy', function () {
        return view('ar.our_brand');
    })->name('ar.brands');
    Route::get('/brand-crico', function () {
        return view('ar.our_brand_crico');
    })->name('ar.brands_crico');
    Route::get('/brand-alyoum', function () {
        return view('ar.our_brand_alyoum');
    })->name('ar.brands_alyoum');
    Route::get('/home', function () {
        return view('ar.home');
    })->name('ar.home');
    Route::get('/contact-us', function () {
        return view('ar.contact_us');
    })->name('ar.contact');
    Route::get('/our-products', function () {
        return view('ar.our_products');
    })->name('ar.our.products');
    Route::get('/activities', function () {
        return view('ar.activities');
    })->name('ar.activities');
    Route::get('/terms_condition', function () {
        return view('ar.terms_condition');
    })->name('ar.terms_condition');
    Route::get('/privacy_policy', function () {
        return view('ar.privacy_policy');
    })->name('ar.privacy_policy');
});


Route::prefix('Fr')->group(function () {
    Route::get('/about', function () {
        return view('fr.about_us');
    })->name('fr.about');
    Route::get('/brand-alawafy', function () {
        return view('fr.our_brand');
    })->name('fr.brands');
    Route::get('/brand-crico', function () {
        return view('fr.our_brand_crico');
    })->name('fr.brands_crico');
    Route::get('/brand-alyoum', function () {
        return view('fr.our_brand_alyoum');
    })->name('fr.brands_alyoum');
    Route::get('/home', function () {
        return view('fr.home');
    })->name('fr.home');
    Route::get('/contact-us', function () {
        return view('fr.contact_us');
    })->name('fr.contact');
    Route::get('/our-products', function () {
        return view('fr.our_products');
    })->name('fr.our.products');
    Route::get('/activities', function () {
        return view('fr.activities');
    })->name('fr.activities');
    Route::get('/terms_condition', function () {
        return view('fr.terms_condition');
    })->name('fr.terms_condition');
    Route::get('/privacy_policy', function () {
        return view('fr.privacy_policy');
    })->name('fr.privacy_policy');
});




Route::post('/contact/create', [FormController::class, 'contact_create'])->name('contact.create');
Route::post('/news-letter/create', [FormController::class, 'news_letter_create'])->name('news.letter.create');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {


    Route::get('/admin/contacts-details', [AdminController::class, 'get_contacts'])->name('contact');
    Route::delete('/admin/contacts-delete/{id}', [AdminController::class, 'contact_delete'])->name('contact.delete');
    Route::get('/admin-news-letter', [AdminController::class, 'get_news_letter'])->name('news.letter');
    Route::delete('/admin/news-letter-delete/{id}', [AdminController::class, 'news_letter_delete'])->name('news.letter.delete');




    Route::get('admin/home-english', [AdminHomeController::class, 'admin_home_english'])->name('admin.home.english');
    Route::get('admin/home-french', [AdminHomeController::class, 'admin_home_french'])->name('admin.home.french');
    Route::get('admin/home-arabic', [AdminHomeController::class, 'admin_home_arabic'])->name('admin.home.arabic');


    // Home page routes
    Route::post('admin/meta/store', [AdminHomeController::class, 'meta2'])->name('home.meta');
    Route::post('admin/banner-1', [AdminHomeController::class, 'admin_banner_1'])->name('home.banner.1');
    Route::post('admin/banner-2', [AdminHomeController::class, 'admin_banner_2'])->name('home.banner.2');
    Route::post('admin/banner-3', [AdminHomeController::class, 'admin_banner_3'])->name('home.banner.3');
    Route::post('admin/about', [AdminHomeController::class, 'admin_about'])->name('home.about');
    Route::post('admin/our-value', [AdminHomeController::class, 'admin_our_value'])->name('home.our.value');
    Route::post('admin/section-6', [AdminHomeController::class, 'admin_section_6'])->name('home.section.6');
    Route::post('admin/our-brand-1', [AdminHomeController::class, 'admin_our_brand_1'])->name('home.our.brand_1');
    Route::post('admin/our-brand-2', [AdminHomeController::class, 'admin_our_brand_2'])->name('home.our.brand_2');
    Route::post('admin/our-brand-3', [AdminHomeController::class, 'admin_our_brand_3'])->name('home.our.brand_3');
    Route::post('/admin/activity/store', [ActivityController::class, 'activity_store'])->name('activity.store');
    Route::put('/admin/activity/{id}/update', [ActivityController::class, 'activity_update'])->name('activity.update');
    Route::delete('/admin/activity/{id}/delete', [ActivityController::class, 'activity_delete'])->name('activity.delete');




    // About Page
    Route::get('admin/about-english', [AdminAboutController::class, 'admin_about_english'])->name('admin.about.english');
    Route::get('admin/about-french', [AdminAboutController::class, 'admin_about_french'])->name('admin.about.french');
    Route::get('admin/about-arabic', [AdminAboutController::class, 'admin_about_arabic'])->name('admin.about.arabic');
    Route::post('admin/about-meta/store', [AdminAboutController::class, 'about_meta_section'])->name('about.meta');
    Route::post('admin/about-sec-1', [AdminAboutController::class, 'admin_section_1'])->name('about.section.1');
    Route::post('admin/about-sec-2', [AdminAboutController::class, 'admin_section_2'])->name('about.section.2');
    Route::post('admin/about-sec-3', [AdminAboutController::class, 'admin_section_3'])->name('about.section.3');

    // English Brand Routes
    Route::get('admin/brand-alawafy', [AdminBrandController::class, 'admin_brand_alawafy'])->name('admin.brand.alawafy.english');
    Route::get('admin/brand-alyoum', [AdminBrandController::class, 'admin_brand_alyoum'])->name('admin.brand.alyoum.english');
    Route::get('admin/brand-crico', [AdminBrandController::class, 'admin_brand_crico'])->name('admin.brand.crico.english');

    // Alawaf Brand Routes
    Route::post('admin/alawafy-meta/store', [AlawafyController::class, 'alawafy_meta_section'])->name('alawafy.meta');
    Route::post('admin/alawafy-banner/store', [AlawafyController::class, 'alawafy_banner_section'])->name('alawafy.banner');
    Route::post('admin/alawafy-section-2/store', [AlawafyController::class, 'alawafy_section2'])->name('alawafy.section.2');

    Route::post('admin/alawafy-item-1/store', [AlawafyController::class, 'alawafy_item_1'])->name('alawafy.item.1');
    Route::post('admin/alawafy-item-2/store', [AlawafyController::class, 'alawafy_item_2'])->name('alawafy.item.2');
    Route::post('admin/alawafy-item-3/store', [AlawafyController::class, 'alawafy_item_3'])->name('alawafy.item.3');
    Route::post('admin/alawafy-item-4/store', [AlawafyController::class, 'alawafy_item_4'])->name('alawafy.item.4');
    Route::post('admin/alawafy-item-5/store', [AlawafyController::class, 'alawafy_item_5'])->name('alawafy.item.5');
    Route::post('admin/alawafy-item-6/store', [AlawafyController::class, 'alawafy_item_6'])->name('alawafy.item.6');
    Route::post('admin/alawafy-item-7/store', [AlawafyController::class, 'alawafy_item_7'])->name('alawafy.item.7');

    // Alyoum Brand Routes
    Route::post('admin/alyoum-meta/store', [AlyoumController::class, 'alyoum_meta_section'])->name('alyoum.meta');
    Route::post('admin/alyoum-banner/store', [AlyoumController::class, 'alyoum_banner_section'])->name('alyoum.banner');
    Route::post('admin/alyoum-section-2/store', [AlyoumController::class, 'alyoum_section2'])->name('alyoum.section.2');

    Route::post('admin/alyoum-item-1/store', [AlyoumController::class, 'alyoum_item_1'])->name('alyoum.item.1');
    Route::post('admin/alyoum-item-2/store', [AlyoumController::class, 'alyoum_item_2'])->name('alyoum.item.2');
    Route::post('admin/alyoum-item-3/store', [AlyoumController::class, 'alyoum_item_3'])->name('alyoum.item.3');
    Route::post('admin/alyoum-item-4/store', [AlyoumController::class, 'alyoum_item_4'])->name('alyoum.item.4');
    Route::post('admin/alyoum-item-5/store', [AlyoumController::class, 'alyoum_item_5'])->name('alyoum.item.5');
    Route::post('admin/alyoum-item-6/store', [AlyoumController::class, 'alyoum_item_6'])->name('alyoum.item.6');
    Route::post('admin/alyoum-item-7/store', [AlyoumController::class, 'alyoum_item_7'])->name('alyoum.item.7');


});
