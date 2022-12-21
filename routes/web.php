<?php

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

Route::get('/', function () {

    return view('welcome');
});

Route::get(md5('/about'), function () {
    $token = $request->session()->token();
    dd($token);

   })->name('About-us');*/
   Route::get(md5('/contact-u'), function () {
    return view('contact');
  })->name('contact-us');
  Route::get(md5('/country-u'), function () {
    return view('country');
  })->name('country');

  //_invoke



//_ignore it_//
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
