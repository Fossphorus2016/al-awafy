<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminBrandController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AlawafyController;
use App\Http\Controllers\AlyoumController;
use App\Http\Controllers\CircoController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\OurActivityController;
use Illuminate\Support\Facades\Artisan;
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






Route::get('/clear-cache', function () {
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');

    // Check if storage link exists before linking
    $storageLink = public_path('storage');
    if (!is_link($storageLink)) {
        Artisan::call('storage:link');
    }

    return response()->json(['status' => 'success', 'message' => 'All caches cleared successfully']);
});

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
    Route::post('admin/meta/store', [AdminHomeController::class, 'meta_section'])->name('home.meta');
    Route::post('admin/banner-1', [AdminHomeController::class, 'admin_banner_1'])->name('home.banner.1');
    Route::post('admin/banner-2', [AdminHomeController::class, 'admin_banner_2'])->name('home.banner.2');
    Route::post('admin/banner-3', [AdminHomeController::class, 'admin_banner_3'])->name('home.banner.3');
    Route::post('admin/about', [AdminHomeController::class, 'admin_about'])->name('home.about');
    Route::post('admin/our-value', [AdminHomeController::class, 'admin_our_value'])->name('home.our.value');
    Route::post('admin/section-6', [AdminHomeController::class, 'admin_section_6'])->name('home.section.6');
    Route::post('admin/our-brand', [AdminHomeController::class, 'admin_our_brand'])->name('home.our.brand');
    Route::post('admin/our-brand-1', [AdminHomeController::class, 'admin_our_brand_1'])->name('home.our.brand_1');
    Route::post('admin/our-brand-2', [AdminHomeController::class, 'admin_our_brand_2'])->name('home.our.brand_2');
    Route::post('admin/our-brand-3', [AdminHomeController::class, 'admin_our_brand_3'])->name('home.our.brand_3');
    Route::post('/admin/our-activity/store', [AdminHomeController::class, 'admin_activity'])->name('home_activity');
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
    Route::get('admin/brand-alawafy-english', [AdminBrandController::class, 'admin_brand_alawafy'])->name('admin.brand.alawafy.english');
    Route::get('admin/brand-alyoum-english', [AdminBrandController::class, 'admin_brand_alyoum'])->name('admin.brand.alyoum.english');
    Route::get('admin/brand-crico-english', [AdminBrandController::class, 'admin_brand_crico'])->name('admin.brand.crico.english');

    // French Brand Routes
    Route::get('admin/brand-alawafy-french', [AdminBrandController::class, 'admin_brand_alawafy_french'])->name('admin.brand.alawafy.french');
    Route::get('admin/brand-alyoum-french', [AdminBrandController::class, 'admin_brand_alyoum_french'])->name('admin.brand.alyoum.french');
    Route::get('admin/brand-crico-french', [AdminBrandController::class, 'admin_brand_crico_french'])->name('admin.brand.crico.french');

    // Arabic Brand Routes
    Route::get('admin/brand-alawafy-arabic', [AdminBrandController::class, 'admin_brand_alawafy_arabic'])->name('admin.brand.alawafy.arabic');
    Route::get('admin/brand-alyoum-arabic', [AdminBrandController::class, 'admin_brand_alyoum_arabic'])->name('admin.brand.alyoum.arabic');
    Route::get('admin/brand-crico-arabic', [AdminBrandController::class, 'admin_brand_crico_arabic'])->name('admin.brand.crico.arabic');

    Route::get('admin/our-activity-english', [OurActivityController::class, 'admin_our_activity_english'])->name('admin.our.activity.english');
    Route::get('admin/our-activity-arabic', [OurActivityController::class, 'admin_our_activity_arabic'])->name('admin.our.activity.arabic');
    Route::get('admin/our-activity-french', [OurActivityController::class, 'admin_our_activity_french'])->name('admin.our.activity.french');

    // Activity routes
    Route::post('admin/our-activity-meta/store', [OurActivityController::class, 'admin_our_activity_meta'])->name('admin.our.activity.meta');
    Route::post('admin/our-activity-banner/store', [OurActivityController::class, 'admin_our_activity_banner'])->name('admin.our.activity.banner');

    Route::get('admin/our-activity-create-english', [OurActivityController::class, 'admin_our_activity_create_en'])->name('admin.our.activity.create.english');
    Route::get('admin/our-activity-create-arabic', [OurActivityController::class, 'admin_our_activity_create_ar'])->name('admin.our.activity.create.arabic');
    Route::get('admin/our-activity-create-french', [OurActivityController::class, 'admin_our_activity_create_fr'])->name('admin.our.activity.create.french');

    Route::post('admin/our-activity-/store', [OurActivityController::class, 'admin_our_activity_store'])->name('admin.our.activity.store');
    Route::get('/admin/our/activity/edit-english/{id}', [OurActivityController::class, 'admin_our_activity_edit_english'])->name('admin.our.activity.edit.english');
    Route::get('/admin/our/activity/edit-arabic/{id}', [OurActivityController::class, 'admin_our_activity_edit_arabic'])->name('admin.our.activity.edit.arabic');
    Route::get('/admin/our/activity/edit-french/{id}', [OurActivityController::class, 'admin_our_activity_edit_french'])->name('admin.our.activity.edit.french');
    Route::put('/admin/our/activity/update/{id}', [OurActivityController::class, 'admin_our_activity_update'])->name('admin.our.activity.update');



    // Route::get('admin/our-activity-english/update/{id}', [OurActivityController::class, 'admin_our_activity_english'])->name('admin.our.activity.english');
    Route::delete('admin/our-activity-/delete/{id}', [OurActivityController::class, 'admin_our_activity_delete'])->name('admin.our.activity.delete');




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


    // Crico Brand Routes
    Route::post('admin/crico-meta/store', [CircoController::class, 'crico_meta_section'])->name('crico.meta');
    Route::post('admin/crico-banner/store', [CircoController::class, 'crico_banner_section'])->name('crico.banner');
    Route::post('admin/crico-section-2/store', [CircoController::class, 'crico_section2'])->name('crico.section.2');

    Route::post('admin/crico-item-1/store', [CircoController::class, 'crico_item_1'])->name('crico.item.1');
    Route::post('admin/crico-item-2/store', [CircoController::class, 'crico_item_2'])->name('crico.item.2');
    Route::post('admin/crico-item-3/store', [CircoController::class, 'crico_item_3'])->name('crico.item.3');
    Route::post('admin/crico-item-4/store', [CircoController::class, 'crico_item_4'])->name('crico.item.4');
    Route::post('admin/crico-item-5/store', [CircoController::class, 'crico_item_5'])->name('crico.item.5');
    Route::post('admin/crico-item-6/store', [CircoController::class, 'crico_item_6'])->name('crico.item.6');





    // Activities Page Route
    Route::get('admin/activities-english', function () {
        return view('admin.en.activities');
    });
});
