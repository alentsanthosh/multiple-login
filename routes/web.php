<?php



use App\Http\Controllers\AuthController;

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

Route::get('/{any}', function () {
    return view('welcome'); 
})->where('any', '.*');

Route::any('/login', [AuthController::class, 'login']);

Route::middleware(['auth:user'])->group(function () {
    Route::get('/user/dashboard', 'UserController@dashboard')->name('user.dashboard');
});

Route::middleware(['auth:distributor'])->group(function () {
    Route::get('/distributor/dashboard', 'DistributorController@dashboard')->name('distributor.dashboard');
});
