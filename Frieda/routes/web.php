<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleLikeController;
use App\Http\Controllers\FarmerIntroductionController;
use App\Http\Controllers\FarmerContentController;

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
Route::get('/farmerContent', 
[FarmerContentController::class,'index'])
->name("farmerContent.index");

/*Route::get('/farmerContent', [FarmerContentController::class,'search_location'])
->name("farmerContent.search");*/

Route::get('/sponsors', function () {
    return view("pages.sponsors");
});

// 民眾頁面-----需要具會員資格

Route::get('/sessionPeople', function () {
    return view("pages.sessionPeople");
});
Route::get('/sessionFarmer/{fid}/', function () {
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

Route::get('/designGardenFarmer/{fid}/',
    [FarmerIntroductionController::class,'index'])
    ->name("designGardenFarmer.index");



Route::post('/postit', 
    [FarmerIntroductionController::class,'postit'])
    ->name("designGardenFarmer.postit");

Route::get('/garden/{fid}/', 
    [PeopleLikeController::class,'index'])
    ->name("garden.index");
