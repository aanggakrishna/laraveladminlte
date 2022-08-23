<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
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
}
);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::get('users/get_data',
				[UserController::class, 'get_data']
				)->name('user.get_data');
    Route::get('users/get_datatable',
                [UserController::class, 'get_datatable']
                )->name('user.get_datatable');
    Route::resource('users', UserController::class);
    // Route::resource('products', ProductController::class);
    Route::get('company/get_data',
				[CompanyController::class, 'get_data']
				)->name('company.get_data');
    Route::resource('company', CompanyController::class);
 	
});