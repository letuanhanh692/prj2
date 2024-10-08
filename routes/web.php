<?php

use App\Http\Controllers\Front\HomeController;
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

Route::get('/',[HomeController::class,'index']);

Route::prefix('shop')->group(function(){
    Route::get('product/{id}', [App\Http\Controllers\Front\ShopController::class,'show']);
    Route::post('product/{id}', [App\Http\Controllers\Front\ShopController::class,'postComment']);
    Route::get('/', [App\Http\Controllers\Front\ShopController::class,'index']);
    Route::get('/{categoryName}', [App\Http\Controllers\Front\ShopController::class,'category']);

});
Route::prefix('introduce')->group(function () {
    Route::get('/blog', [\App\Http\Controllers\Front\IntroduceController::class, 'blog'])->name('introduce.blog');
    Route::get('/team', [\App\Http\Controllers\Front\IntroduceController::class, 'team'])->name('introduce.team');
    Route::get('/contact', [\App\Http\Controllers\Front\IntroduceController::class, 'contact'])->name('introduce.contact');
});




Route::prefix('cart')->group(function() {
    Route::get('/', [\App\Http\Controllers\Front\CartController::class, 'index']);
    Route::get('add/{id}', [\App\Http\Controllers\Front\CartController::class, 'add']);
    Route::get('/', [\App\Http\Controllers\Front\CartController::class, 'index']);
    Route::get('delete/{rowId}', [\App\Http\Controllers\Front\CartController::class, 'delete']);
    Route::post('/cart/update', [\App\Http\Controllers\Front\CartController::class, 'update']);

});

Route::prefix('checkout')->group(function(){
    Route::get('', [\App\Http\Controllers\Front\CheckOutController::class,'index']);
    Route::post('/', [\App\Http\Controllers\Front\CheckOutController::class, 'addOrder']);
    Route::get('/result', [\App\Http\Controllers\Front\CheckOutController::class, 'result']);

});
Route::prefix('account')->group(function() {
  Route::get('login',[\App\Http\Controllers\Front\AccountController::class,'login']);
       Route::post('login',[\App\Http\Controllers\Front\AccountController::class,'checkLogin']);

    Route::get('logout', [\App\Http\Controllers\Front\AccountController::class,'logout']);
    Route::get('register',[\App\Http\Controllers\Front\AccountController::class,'register']);
    Route::post('register',[\App\Http\Controllers\Front\AccountController::class,'postRegister']);

    Route::prefix('my-order')->middleware('CheckMemberLogin')->group(function(){
        Route::get('/',[\App\Http\Controllers\Front\AccountController::class, 'myOrderIndex']);
        Route::get('{id}',[\App\Http\Controllers\Front\AccountController::class, 'myOrderShow']);
    });
});

Route::prefix('admin')->middleware('CheckAdminLogin')->group(function () {
    Route::redirect('', 'admin/dashboard');

    Route::prefix('dashboard')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    });

    Route::resource('user', \App\Http\Controllers\Admin\UserController::class);
    Route::get('create', [\App\Http\Controllers\Admin\UserController::class, 'create']);





    Route::prefix('order')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\OrderController::class, 'index'])->name('order.index');;
        Route::get('{id}', [\App\Http\Controllers\Admin\OrderController::class, 'show']);
    });

    Route::resource('product', \App\Http\Controllers\Admin\ProductController::class);
    Route::resource('product/{product_id}/image', \App\Http\Controllers\Admin\ProductImageController::class);
    Route::resource('product/{product_id}/detail', \App\Http\Controllers\Admin\ProductDetailController::class);
    Route::resource('category', \App\Http\Controllers\Admin\ProductCategoryController::class);

//    Route::prefix('contactUs')->group(function () {
//        Route::get('/', [\App\Http\Controllers\Admin\Contac::class, 'index'])->name('contactUs.index');;
//        Route::get('{id}', [\App\Http\Controllers\Admin\ContactUsController::class, 'show']);
//    });



    Route::prefix('login')->group(function () {
        Route::get('', [\App\Http\Controllers\Admin\HomeController::class, 'getLogin'])->withoutMiddleware('CheckAdminLogin');
        Route::post('', [\App\Http\Controllers\Admin\HomeController::class, 'postLogin'])->withoutMiddleware('CheckAdminLogin');
    });
    Route::get('logout', [\App\Http\Controllers\Admin\HomeController::class, 'logout']);
});
