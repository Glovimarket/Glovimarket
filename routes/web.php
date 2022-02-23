<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ExitController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Mail\EmailMailable;
use App\Models\Products;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Http\Controllers\Auth\LoginController;


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

//ruta para el Index del proyecto
Route::get('', function () {
    $products = Products::all();

        return view('welcome', compact('products'));
})->name('index');

Route::get('/login', function () {
        return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Auth::routes();

Route::post('register/store', [RegisterController::class, 'create'])->name('register.store');


Route::post('product/update_file', [ProductsController::class, 'update_file'])->name('product.update_file');

//========== Rutas para la seccion de los Usuarios========

Route::get('user/sign-up', [UserController::class, 'signup'])->name('sign-up');

Route::resource('user', UserController::class);

//========== Rutas para la seccion de los Productos========
Route::resource('products', ProductsController::class);

//========== Rutas para la seccion de las Salidas========
Route::resource('exits', ExitController::class);

//========== Rutas para la seccion de los Roles========
Route::resource('rols', RolController::class);

//========== Rutas para la seccion de las Entradas========
Route::resource('incomes', IncomeController::class);

//========== Rutas para la seccion de las Categorias========
Route::resource('categories', CategoriesController::class);

//========== Rutas para la seccion de ls Proveedores========
Route::resource('suppliers', SupplierController::class);

//========== Rutas para la seccion de ls Archivos========
Route::resource('file', FileController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
