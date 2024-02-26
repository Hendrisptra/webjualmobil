<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get("/", [HomeController::class,'index']);
Route::get('/contact', [HomeController::class,'contact']);

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/user/{id}', function ($id){
    return 'User dengan Id '. $id;
});
Route::prefix('admin')->group(function (){
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });
    Route::get('/users', function (){
        return 'Admin Users';
    });
});

// Route::get('/list_barang/{id}/{nama}', function($id, $nama){
//     return view('list_barang', compact('id', 'nama'));
// });

Route::get('/listbarang/{id}/{nama}', [App\Http\Controllers\ListBarangController::class, 'tampilkan']);

Route::get('/login', [App\Http\Controllers\LoginController::class,'login']);   
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class,'dashboard']);
Route::get('/list_item', [App\Http\Controllers\ListItemController::class,'list_item']);

