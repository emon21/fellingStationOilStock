<?php

use App\Http\Controllers\CalibarationChartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OilStockController;
use Illuminate\Support\Facades\Route;

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


route::get('/', function () {
    return view('home');
});

//Route::get('/oil',[OilStockController::class,'index'])->name('oil');

//category route
// Route::get('/category',[CategoryController::class,'index'])->name('category');

route::resource('category', CategoryController::class);

route::resource('calibaration', CalibarationChartController::class);

# Relationship route category with calibaration

route::get('category/{id}/calibaration', [CategoryController::class, 'calibaration'])->name('category.calibaration');

Route::get('driver', [OilStockController::class, 'driver'])->name('driver');

Route::post('driver/create', [OilStockController::class, 'createDriver'])->name('driver.create');

route::resource('oil', OilStockController::class);
