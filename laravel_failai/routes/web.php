<?php

use App\Http\Controllers\Admin\AddressesController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\FuelTypesController;
use App\Http\Controllers\Admin\GearboxesController;
use App\Http\Controllers\Admin\RentalsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\SetLocale;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => SetLocale::class], function () {

    Route::get('/image', [ImageController::class,'index'])->middleware(['auth', 'verified'])->name('image.index');
    Route::post('/image', [ImageController::class,'store'])->middleware(['auth', 'verified'])->name('image.store');
    Route::get('/', HomeController::class)->name('home');
    Route::get('/rental/{rental}', [\App\Http\Controllers\RentalsController::class, 'show'])->name('rental.show');

    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified', isAdmin::class]], function () {
//        Route::get('/', DashBoardController::class)->name('dashboard');
//        Route::delete('/product/file/{file}', [ProductsController::class, 'destroyFile'])->name('product.destroy-file');
        Route::resources([
            'rentals' => RentalsController::class,
            'categories' => CategoriesController::class,
            'fuelTypes' => FuelTypesController::class,
            'gearboxes' => GearboxesController::class,
            'addresses'=> AddressesController::class,
            'users'=> UsersController::class,
        ]);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
