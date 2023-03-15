<?php

use App\Http\Controllers\Admin\AddressesController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\FuelTypesController;
use App\Http\Controllers\Admin\GearboxesController;
use App\Http\Controllers\Admin\RentalsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\ContactsController;
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

    Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
    Route::get('/image', [ImageController::class,'index'])->middleware(['auth', 'verified'])->name('image.index');
    Route::post('/image', [ImageController::class,'store'])->middleware(['auth', 'verified'])->name('image.store');
    Route::get('/', HomeController::class)->name('home');
    Route::get('/rental/{rental}', [\App\Http\Controllers\RentalsController::class, 'show'])->name('rental.show');
    Route::get('/rentals', [\App\Http\Controllers\RentalsController::class, 'index'])->name('rental.index');
    Route::get('/categories', [\App\Http\Controllers\CategoriesController::class, 'index'])->name('category.index');
    Route::post('/category', [\App\Http\Controllers\CategoriesController::class, 'show'])->name('category.show');
    Route::get('/category/{category:id}', [\App\Http\Controllers\CategoriesController::class, 'show'])->name('category.showById');
    Route::post('/storereservation', [\App\Http\Controllers\ReservationController::class, 'store'])->name('reservation.store');

    Route::group( ['middleware' => ['auth', 'verified']], function () {
        Route::post('/userrentals', [\App\Http\Controllers\RentalsController::class, 'userRentals'])->name('user.rentals');
//        Route::get('/userrentals', [\App\Http\Controllers\RentalsController::class, 'userRentals'])->name('user.rentals');
        Route::post('/userrentalsstore', [\App\Http\Controllers\RentalsController::class, 'userRentalsStore'])->name('user.rentals.store');
        Route::get('/userrentalscreate', [\App\Http\Controllers\RentalsController::class, 'userRentalsCreate'])->name('user.rentals.create');
        Route::get('/userrentals/{rental}/edit', [\App\Http\Controllers\RentalsController::class, 'userRentalsEdit'])->name('user.rentals.edit');
        Route::put('/userrentalsupdate/{rental}', [\App\Http\Controllers\RentalsController::class, 'userRentalsUpdate'])->name('user.rentals.update');

    });

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
