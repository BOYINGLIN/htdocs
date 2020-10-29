<?php
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

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


/*-----訪客頁面-----不具收藏功能--*/
Route::get('/farmerContent',function () {return view("pages.farmerContent");});
Route::get('/sponsors',function () {return view("pages.sponsors");});

/*-----民眾頁面-----需要具會員資格*/

Route::get('/sessionPeople',function () {return view("pages.sessionPeople");});
Route::get('/sessionFarmer',function () {return view("pages.sessionFarmer");});
Route::get('/myFavorites',function () {return view("pages.myFavorites");});

/*----農夫頁面----*/
Route::get('/designGardenFarmer',function () {return view("pages.designGardenFarmer");});
Route::post('/postit',[DesignContractFarmerController :: class, "postit"])->name("news.postit");
