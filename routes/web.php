<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TranslateController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TermsConditionController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\SeoController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/cleareverything', function () {

    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";

    $clearconfig = Artisan::call('config:cache');
    echo "Config Cache cleared<br>";

    $configclear = Artisan::call('config:clear');
    echo "Config cleared<br>";
});


Auth::routes();

// Route For User
Route::get('/', [UserController::class, 'index'])->name('index');

// Bangla and English
Route::get('/english-to-bangla-translator', [UserController::class, 'english_to_bangla'])->name('english_to_bangla');
Route::get('/bangla-to-english-translator', [UserController::class, 'bangla_to_english'])->name('bangla_to_english');


// English and Arabic
Route::get('/english-to-arabic-translator', [UserController::class, 'english_to_arabic'])->name('english_to_arabic');
Route::get('/arabic-to-english-translator', [UserController::class, 'arabic_to_english'])->name('arabic_to_english');


// English and Spanish
Route::get('/english-to-spanish-translator', [UserController::class, 'english_to_spanish'])->name('english_to_spanish');
Route::get('/spanish-to-english-translator', [UserController::class, 'spanish_to_english'])->name('spanish_to_english');


// English and Hindi
Route::get('/english-to-hindi-translator', [UserController::class, 'english_to_hindi'])->name('english_to_hindi');
Route::get('/hindi-to-english-translator', [UserController::class, 'hindi_to_english'])->name('hindi_to_english');



Route::get('/translate', [UserController::class, 'translate'])->name('translate');
Route::get('/blogs', [UserController::class, 'blogs'])->name('blogs');
Route::get('/single/{id}', [UserController::class, 'single'])->name('single');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/terms-condition', [UserController::class, 'terms_condition'])->name('terms-condition');
Route::get('/privacy-policy', [UserController::class, 'privacy_policy'])->name('privacy-policy');
Route::post('/sendmail', [UserController::class, 'sendmail'])->name('sendmail');




// Route For Admin
Route::get('/admin', function () {
    return view('auth.login');
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Blog Part
    Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
        Route::get('/index', [BlogController::class, 'index'])->name('index');
        Route::get('/create', [BlogController::class, 'create'])->name('create');
        Route::post('/store', [BlogController::class, 'store'])->name('store');
        Route::post('/upload', [BlogController::class, 'upload'])->name('upload');
        Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [BlogController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [BlogController::class, 'delete'])->name('delete');
    });


    // Translate Part
    // Route::group(['prefix' => 'translate', 'as' => 'translate.'], function () {
    //     Route::get('/index', [TranslateController::class, 'index'])->name('index');
    //     Route::get('/create/{translate_type}', [TranslateController::class, 'create'])->name('create');
    //     Route::post('/store', [TranslateController::class, 'store'])->name('store');
    //     Route::get('/edit/{translate_type}', [TranslateController::class, 'edit'])->name('edit');
    //     Route::post('/update/{translate_type}', [TranslateController::class, 'update'])->name('update');
    // });
    Route::group(['prefix' => 'translate', 'as' => 'translate.'], function () {
        Route::get('/index', [TranslateController::class, 'index'])->name('index');
        Route::get('/create/{id}', [TranslateController::class, 'create'])->name('create');
        Route::post('/store', [TranslateController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [TranslateController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [TranslateController::class, 'update'])->name('update');
    });

    // About Part
    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::get('/index', [AboutController::class, 'index'])->name('index');
        Route::get('/create', [AboutController::class, 'create'])->name('create');
        Route::post('/store', [AboutController::class, 'store'])->name('store');
        Route::get('/edit', [AboutController::class, 'edit'])->name('edit');
        Route::post('/update', [AboutController::class, 'update'])->name('update');
    });

    // Terms & Conditions Part
    Route::group(['prefix' => 'termsCondition', 'as' => 'termsCondition.'], function () {
        Route::get('/index', [TermsConditionController::class, 'index'])->name('index');
        Route::get('/create', [TermsConditionController::class, 'create'])->name('create');
        Route::post('/store', [TermsConditionController::class, 'store'])->name('store');
        Route::get('/edit', [TermsConditionController::class, 'edit'])->name('edit');
        Route::post('/update', [TermsConditionController::class, 'update'])->name('update');
    });

    // Privacy Policy Part
    Route::group(['prefix' => 'privacyPolicy', 'as' => 'privacyPolicy.'], function () {
        Route::get('/index', [PrivacyPolicyController::class, 'index'])->name('index');
        Route::get('/create', [PrivacyPolicyController::class, 'create'])->name('create');
        Route::post('/store', [PrivacyPolicyController::class, 'store'])->name('store');
        Route::get('/edit', [PrivacyPolicyController::class, 'edit'])->name('edit');
        Route::post('/update', [PrivacyPolicyController::class, 'update'])->name('update');


        Route::get('/', [PrivacyPolicyController::class, 'seo'])->name('setting');
        Route::post('/update/seo/{id}', [PrivacyPolicyController::class, 'updateSeo'])->name('update');
    });

    // seo Part
    // Route::group(['prefix' => 'seo'], function () {
    //     Route::get('/', [SeoController::class, 'seo'])->name('setting');
    //     Route::post('/update/{id}', [SeoController::class, 'seoUpdate'])->name('setting');
    // });
});
