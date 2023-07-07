<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyCommerceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;

Route::get('/',[MyCommerceController::class, 'index'])->name('home');

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

});
