
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantoController;
use App\Http\Controllers\SecondController;
use App\Http\Controllers\learnController;

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
Route::get('/About', function () {
    return view('About');
})->name('About-us');

/*Route::get('/contact', function () {
Route::get(md5('/contact'), function () {
    $token = $request->session()->token();
    dd($token);

});
  })->name('contact-us');8*/

//   /** */ Route::get(md5('/country-u'), function () {
//     return view('country');
//   })->name('country');/


//_ignore it_//
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

Route::get('santono', [SantoController::class, 'index'])->name('santo');
Route::get('country', [SantoController::class, 'countrym'])->name('countryr');
Route::get('/testone', [SecondController::class, 'test']);


Route::get('laravel', [SantoController::class, 'laravel'])->name('laravel');


Route::post('/Student/store', [SantoController::class, 'Studentstore'])->name('Student.store');

//__ Invoke__//
Route::get('/test', learnController::class);
Route::get('/Student/view', [SantoController::class, 'countrym'])->name('contact-us');
