<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;

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

// Route::view('/logview','pages.login');
Route::post('login',[UserController::class,'login']);



Route::view('/regview','pages.register');
Route::post('register',[UserController::class,'register']);


// Route::get('/login', function(){
//     if(session()->has('user')){
//         return view('/profile');
//     }
//     return view('/login');
// });

// Route::get('/logout', function(){
//     if(session()->has('user')){
//         session()->pull('user');
//     }
//     return redirect('/login');
// });


// Route::get('profile','profile');

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
// Route::get('/services', [PagesController::class, 'services']);

Route::get('/contact',[PagesController::class,'contact']);
Route::get('/products',[ProductController::class,'products']);

Route::get('/logout', function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    return view('pages.login');
});
// Route::get('/', function(){
//     if(session()->has('user')){
//         return redirect('/');
//     }
//     return view('/logview');
// });
Route::get('/logview', function(){
    if(session()->has('user')){
        return redirect('/');
    }
    return view('pages.login');
});
Route::get('/detail/{id}',[ProductController::class,'detail']);

Route::get('/search',[ProductController::class,'search']);

Route::post('/add_to_cart',[ProductController::class,'addToCart']);

Route::get('/cartlist',[ProductController::class,'cartList']);

Route::get('/removecart/{id}',[ProductController::class,'removeCart']);

Route::get('/ordernow',[ProductController::class,'orderNow']);

Route::post('/orderplace',[ProductController::class,'orderPlace']);

Route::get('/myorders',[ProductController::class,'myOrders']);