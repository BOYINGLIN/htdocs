<?php
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\FarmerIntroductionController;

Route::get('/', function () {
    return view("pages.index");
});

Route::get('/loginFarmer', function () {
    return view("pages.loginFarmer");
});
Route::get('/loginPeople', function () {
    return view("pages.loginPeople");
});

Route::get('/registerFarmer',
    function () {
        return view("pages.registerFarmer");
    });

Route::get('/registerPeople',
    function () {
        return view("pages.registerPeople");
    });

// 訪客頁面-----不具收藏功能
Route::get('/farmerContent', function () {
    return view("pages.farmerContent");
});
Route::get('/sponsors', function () {
    return view("pages.sponsors");
});

// 民眾頁面-----需要具會員資格

Route::get('/sessionPeople', function () {
    return view("pages.sessionPeople");
});
Route::get('/sessionFarmer', function () {
    return view("pages.sessionFarmer");
});
Route::get('/myFavorites', function () {
    return view("pages.myFavorites");
});

// 農夫頁面
Route::get('/designGardenFarmer',
    function () {
        return view("pages.designGardenFarmer");
    });

// 贊助頁面
Route::get('/sponsors', function () {
    return view("pages.sponsors");
});

// 贊助頁面
Route::get('/sponsorsJoke', function () {
    return view("pages.sponsorsJoke");
});

// 網站地圖
Route::get('/sitemap', function () {
    return view("pages.sitemap");
});

// 農夫頁面designGardenFarmer
Route::get('/designGardenFarmer',
    [
        FarmerIntroductionController::class,
        "index"
    ])->name("designGardenFarmer.index");
Route::post('/postit', [
    FarmerIntroductionController::class,
    'postit'
])->name("designGardenFarmer.postit");
Route::get('/garden/{id}/', [
    PeopleLikeController::class,
    'index'
])->name("garden.index");
