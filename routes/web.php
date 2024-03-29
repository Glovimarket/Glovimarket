<?php
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\ExitController;
use App\Http\Controllers\Admin\IncomeController;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\SellerCategoriesController;
use App\Http\Controllers\SellerIncomeController;
use App\Http\Controllers\SellerProductsController;
use App\Http\Controllers\SellerExitController;
use App\Http\Controllers\SellerSuppliersController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Mail\EmailMailable;
use App\Models\Products;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;



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

// |--------------------------------------------------------------------------
// | // Auth middleware
// |--------------------------------------------------------------------------
Auth::routes();
Route::middleware(['is_admin' ,'auth'])->group(function(){
    // Middleware path
Route::get('/denied', ['as' => 'denied', function() {
    return view('denied');
}]);
// |--------------------------------------------------------------------------

Route::get('/showproduct', function () {
    return view('showproduct');
})->name('showproduct'); 

Route::post('register/store', [RegisterController::class, 'create'])->name('register.store');



Route::put('admin/product/storage_file', [ProductsController::class, 'storage_file'])->name('admin.product.storage_file');

//***************************************************************** */
//========== Rutas para la vista de los Administradores=================
//***************************************************************** */



//========== Rutas para la seccion de las Categorias========
Route::resource('admin/categories', CategoriesController::class)->names('admin.categories');


//========== Rutas para la seccion de las Salidas========
Route::resource('admin/exits', ExitController::class)->names('admin.exits');

//========== Rutas para la seccion de las Entradas========
Route::resource('admin/incomes', IncomeController::class)->names('admin.incomes');

//========== Rutas para la seccion de los Productos========
Route::resource('admin/products', ProductsController::class)->names('admin.products')->middleware('is_admin');


// Route::get('admin/products', ProductsController::class)->names('admin.products')->middleware('is_admin');
//========== Rutas para la seccion de los Roles========
Route::resource('admin/rols', RolController::class)->names('admin.rols');

//========== Rutas para la seccion de ls Proveedores========
Route::resource('admin/suppliers', SupplierController::class)->names('admin.suppliers');

//========== Rutas para la seccion de los Usuarios========
Route::resource('admin/user', UserController::class)->names('admin.users');


// Route::get('admin/user', [UserController::class, 'index'])->name('admin.users')->middleware('is_admin');
// Route::get('admin/user', 'show@index')->name('admin.users');

Route::get('user/sign-up', [UserController::class, 'signup'])->name('sign-up');

//========== Rutas para la seccion de ls Archivos========
Route::resource('file', FileController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});


// |--------------------------------------------------------------------------
// | // Auth end
// |--------------------------------------------------------------------------



/*
//========== Rutas para la seccion de las Entradas========
Route::resource('seller/seller_incomes', SellerIncomeController::class);

//========== Rutas para la seccion de las Categorias========
Route::resource('seller/seller_categories', SellerCategoriesController::class);

//========== Rutas para la seccion de ls Proveedores========
Route::resource('seller/seller_suppliers', SupplierController::class);



Route::resource('seller/seller_products', SellerProductsController::class);     


Route::resource('seller/seller_exit', SellerExitController::class);    
*/


Route::get('ls', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::post('cart/factura', [CartController::class, 'factura'])->name('cart.factura');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');




Route::get('/dashboard', function () {
    return redirect('/');
});

