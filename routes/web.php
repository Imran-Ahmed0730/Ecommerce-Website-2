<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyCommerceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SslCommerzPaymentController;

Route::get('/',[MyCommerceController::class, 'index'])->name('home');
Route::get('category/products/all/{id}',[MyCommerceController::class, 'getAllCategoryProduct'])->name('category.show-all');
Route::get('subcategory/product/all/{id}',[MyCommerceController::class, 'getAllSubCategoryProduct'])->name('subcategory.show-all');
Route::get('product/about-product/{id}',[MyCommerceController::class, 'details'])->name('product.about-product');

Route::get('cart/show',[CartController::class, 'index'])->name('cart.show');
Route::post('cart/add/{id}',[CartController::class, 'addToCart'])->name('cart.add');
Route::post('cart/update-quantity/{id}',[CartController::class, 'updateQty'])->name('cart.update-quantity');
Route::get('cart/remove/{id}',[CartController::class, 'remove'])->name('cart.remove');


Route::get('checkout',[CheckoutController::class, 'index'])->name('checkout');
Route::post('checkout/confirm-order',[CheckoutController::class, 'confirmOrder'])->name('checkout.confirm-order');
Route::get('checkout/confirm-order/success',[CheckoutController::class, 'success'])->name('checkout.confirm-order.success');

Route::get('customer/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');
Route::get('customer/login', [CustomerController::class, 'login'])->name('customer.login');
Route::post('customer/login', [CustomerController::class, 'customerLogin'])->name('customer.login');
Route::get('customer/register', [CustomerController::class, 'register'])->name('customer.register');
Route::post('customer/register', [CustomerController::class, 'customerRegister'])->name('customer.register');
Route::get('customer/logout', [CustomerController::class, 'logout'])->name('customer.logout');

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Category Controller
    Route::get('category/add', [CategoryController::class, 'index'])->name('category.add');
    Route::post('category/new', [CategoryController::class, 'store'])->name('category.new');
    Route::get('category/manage', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category/update', [CategoryController::class, 'update'])->name('category.update');
    Route::post('category/delete', [CategoryController::class, 'remove'])->name('category.delete');

    //SubCategory Controller
    Route::get('subcategory/add', [SubCategoryController::class, 'index'])->name('subcategory.add');
    Route::post('subcategory/new', [SubCategoryController::class, 'store'])->name('subcategory.new');
    Route::get('subcategory/manage', [SubCategoryController::class, 'manage'])->name('subcategory.manage');
    Route::get('subcategory/edit/{id}', [SubCategoryController::class, 'edit'])->name('subcategory.edit');
    Route::post('subcategory/update', [SubCategoryController::class, 'update'])->name('subcategory.update');
    Route::post('subcategory/delete', [SubCategoryController::class, 'remove'])->name('subcategory.delete');

    //Brand Controller
    Route::get('brand/add', [BrandController::class, 'index'])->name('brand.add');
    Route::post('brand/new', [BrandController::class, 'store'])->name('brand.new');
    Route::get('brand/manage', [BrandController::class, 'manage'])->name('brand.manage');
    Route::get('brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('brand/update', [BrandController::class, 'update'])->name('brand.update');
    Route::post('brand/delete', [BrandController::class, 'remove'])->name('brand.delete');

    //Unit Controller
    Route::get('unit/add', [UnitController::class, 'index'])->name('unit.add');
    Route::post('unit/new', [UnitController::class, 'store'])->name('unit.new');
    Route::get('unit/manage', [UnitController::class, 'manage'])->name('unit.manage');
    Route::get('unit/edit/{id}', [UnitController::class, 'edit'])->name('unit.edit');
    Route::post('unit/update', [UnitController::class, 'update'])->name('unit.update');
    Route::post('unit/delete', [UnitController::class, 'remove'])->name('unit.delete');

    //Product Controller
    Route::get('product/add', [ProductController::class, 'index'])->name('product.add');
    Route::post('product/new', [ProductController::class, 'store'])->name('product.new');
    Route::get('product/get-subcategory-by-category', [ProductController::class, 'getSubCategoryByCategory'])->name('product.get-subcategory-by-category');
    Route::get('product/manage', [ProductController::class, 'manage'])->name('product.manage');
    Route::get('product/details/{id}', [ProductController::class, 'details'])->name('product.details');
    Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('product/update', [ProductController::class, 'update'])->name('product.update');
    Route::post('product/delete', [ProductController::class, 'remove'])->name('product.delete');

});
