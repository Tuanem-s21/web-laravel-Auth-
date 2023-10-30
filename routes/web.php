<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Manage\BookingController;
use App\Http\Controllers\Manage\CategoryController;
use App\Http\Controllers\Manage\ClientController;
use App\Http\Controllers\Manage\ServiceController;
use App\Http\Controllers\Manage\StaffController;
use App\Http\Controllers\Manage\TimeOffController;
use App\Http\Controllers\Manage\VoucherController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/profile/index', [InfoUserController::class, 'index']);
	Route::get('/profile/create', [InfoUserController::class, 'create']);
	Route::get('/profile/edit/{id}', [InfoUserController::class, 'edit']);
	Route::post('/profile/store', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');

// booking
Route::group(['middleware' => 'auth'], function () {
	// index
	Route::get('/booking/index', [BookingController::class, 'index']);
		
	// create
	Route::get('/booking/create', [BookingController::class, 'create']);
});

// client
Route::group(['middleware' => 'auth'], function () {
	// index
	Route::get('/client/index', [ClientController::class, 'index']);
	
	// create
	Route::get('/client/create', [ClientController::class, 'create']);
});


// category
Route::group(['middleware' => 'auth'], function () {
	// index
	Route::get('/category/index', [CategoryController::class, 'index']);
	
	// create
	Route::get('/category/create', [CategoryController::class, 'create']);
});

// service
Route::group(['middleware' => 'auth'], function () {
	// index
	Route::get('/service/index', [ServiceController::class, 'index']);
	
	// create
	Route::get('/service/create', [ServiceController::class, 'create']);
});

// staff
Route::group(['middleware' => 'auth'], function () {
	// index
	Route::get('/staff/index', [StaffController::class, 'index']);
	
	// create
	Route::get('/staff/create', [StaffController::class, 'create']);
});

// voucher
Route::group(['middleware' => 'auth'], function () {
	// index
	Route::get('/voucher/index', [VoucherController::class, 'index']);
	
	// create
	Route::get('/voucher/create', [VoucherController::class, 'create']);
});

// time-off
Route::group(['middleware' => 'auth'], function () {
	// index
	Route::get('/time-off/index', [TimeOffController::class, 'index']);
	
	// create
	Route::get('/time-off/create', [TimeOffController::class, 'create']);
});