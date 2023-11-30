<?php

use App\Http\Controllers\UsersCntroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    return view('home');
});
Route::get("admin-login", function () {
    return view('login');
});
Route::get('logout', [UsersCntroller::class, 'logout'])->name('logout');
Route::get('success/{txn}', [\App\Http\Controllers\UsersCntroller::class, 'gotoSuccess']);
Route::post('register', [\App\Http\Controllers\UsersCntroller::class, 'saveMember'])->name('register');
Route::get('register', function () {
    return view('register');
});
Route::post('login', [UsersCntroller::class, 'login']);
Route::post('check_email', function (Request $req) {
    $check = DB::table('member')->where('email', $req->email)->exists();
    if ($check) {
        return response()->json([
            'code' => 201,
            'message' => 'Email already exist'
        ]);
    } else {
        return response()->json([
            'code' => 205,
            'message' => 'Email not found'
        ]);
    }
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [UsersCntroller::class, 'index']);
    Route::get('dashboard', [UsersCntroller::class, 'index'])->name('admin.dashboard');
    Route::get('payment-setting', [UsersCntroller::class, 'gotoPayment'])->name('admin.payment-setting');

    Route::post('update_payment', [UsersCntroller::class, 'updatePayment'])->name('admin.update_payment');
});