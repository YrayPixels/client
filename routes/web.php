<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use app\Http\Controllers\DealerController;
use app\Http\Controllers\CorporateController;
use app\Http\Controllers\ProductController;
use app\Http\Controllers\OrderController;
use app\Http\Controllers\InvoiceController;
use App\Http\Controllers\OtpValidate;
use App\Http\Controllers\StockController;
use app\Models\Dealer;
use app\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;

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
//     return view('dist.landing');
// });

Route::post('/order', [App\Http\Controllers\OrderController::class, 'store']);
Route::get('/invoice', [App\Http\Controllers\InvoiceController::class, 'index']);
Route::get('/approveinvoice/{id}', [App\Http\Controllers\InvoiceController::class, 'show']);
Route::post('/invoice', [App\Http\Controllers\InvoiceController::class, 'store']);
Route::get('/buy/{id}', [App\Http\Controllers\ProductController::class, 'show']);

Route::get('/invoice/{id}', [App\Http\Controllers\OrderController::class, 'show']);


Route::get('/index', function () {
    return view('dist.index');
});
Route::get('/dealer', function () {
    return view('client.manage_clients');
})->middleware('auth');
Route::get('/corporate', function () {
    return view('dist.apps.customers.corporate');
})->middleware('auth');


// storing data for Dealer
Route::get('/iapprove/{user_code}', [App\Http\Controllers\InvoiceController::class, 'approve']);
Route::get('/isuspend/{user_code}', [App\Http\Controllers\InvoiceController::class, 'suspend']);
Route::get('/ide_activate/{user_code}', [App\Http\Controllers\InvoiceController::class, 'de_activate']);
// Dealers actions
Route::get('/approve/{user_code}', [App\Http\Controllers\DealerController::class, 'approve']);
Route::get('/suspend/{user_code}', [App\Http\Controllers\DealerController::class, 'suspend']);
Route::get('/de_activate/{user_code}', [App\Http\Controllers\DealerController::class, 'de_activate']);

Route::get('/overv/{user_code}', [App\Http\Controllers\DealerController::class, 'show'])->name('overv');
Route::post('/dstore', [App\Http\Controllers\DealerController::class, 'store']);
// retrieving data not on pendding
Route::get('/dealers', [App\Http\Controllers\Dealer Controller::class, 'index'])->name('admin.home');
// storing data for Dealer
Route::post('/cstore', [App\Http\Controllers\CorporateController::class, 'store']);
    // retrieving data not on pendding
    // Route::get('/corporates', [App\Http\Controllers\CorporateController::class, 'index'])
;
Auth::routes();
Route::get('/home', [App\Http\Controllers\DealerController::class, 'sales']);
Route::get('/', [App\Http\Controllers\DealerController::class, 'index'])->name('admin.home');

Route::get('/validate', [OtpValidate::class, 'request'])->name('request_otp');
Route::post('/verify', [OtpValidate::class, 'verify_otp'])->name('verify_otp');

Route::get('/getLgA', [StockController::class, 'getLgA'])->name('getLgA');
Route::post('/add_client', [StockController::class, 'add_client'])->name('add_client');
Route::get('/view_client/{id}', [StockController::class, 'view_client'])->name('view_client');
Route::post('/update_client/{id}', [StockController::class, 'update_client'])->name('update_client');
Route::post('/update_coperate_client/{id}', [StockController::class, 'update_coperate_client'])->name('update_coperate_client');
Route::post('/update_coperate_client2/{id}', [StockController::class, 'update_coperate_client2'])->name('update_coperate_client2');
Route::get('/view_client_details/{id}', [StockController::class, 'view_client_details'])->name('view_client_details');
