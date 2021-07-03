<?php

use Illuminate\Support\Facades\Route;
use   App\Http\Controllers\ShopController;
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



 

Route::get('/', function () {
    return view('start');
 });
route::get('/contact', function(){
   return view('contact');
});
Route::post('/contact',[ShopController::class,'savecontact']) ;
// post la url pishan nadre 
 
Route::get('/card', [ShopController::class , 'card']);

Route::get('/shoper', [ShopController::class,'viewshoper'])->middleware('auth') ;


 Route::get('/insert', [ShopController::class,'insert']);

 
// Route::get('/delete', [ShopController::class,'delete']);

 Route::get('/shoper/{id}', [ShopController::class,'show']);
 Route::get('/shoper/{id}/{postid}', [ShopController::class,'detail']);

 
 Route::get('/save', [ShopController::class,'save']);
 Route::get('/delete/{id}', [ShopController::class,'delete']);//->middleware('auth');//lo awaya hata login nabe natane bchya naw hecvh jeyake
     

 Route::get('/cookie', [ShopController::class,'guest']);
route::post('/order',[ShopController::class,'order']);
route::get('/cart', [ShopController::class,'cart']);
Auth::routes(
   ['register'=>false]);//agar bmanawe bashe register block bklain awa datanin baway blocky bkain

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
