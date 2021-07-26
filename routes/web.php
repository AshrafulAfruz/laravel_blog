<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//website
Route::get('/',['as' => 'website.home', function () {
    return view('website.index');
}]);
Route::get('/post', ['as' => 'website.post', function () {
    return view('website.post');
}]);
Route::get('/category',['as' => 'website.category', function () {
    return view('website.category');
}]);

//admin

Route::group(['prefix'=>'admin','middleware'=> ['auth']], function(){

    Route::get('/dashboard',['as' => 'admin.home', function () {
        return view('admin.dashboard.index');
    }]);
    
    Route::resource('/category', CategoryController::class);
});