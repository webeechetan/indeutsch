<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ProductController;

use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\ContactController;


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


/*--------------------------------- Website Routes ---------------------------------*/


Route::get('/',[WebSiteController::class,'index'])->name('viewIndex');
Route::get('/about',[WebSiteController::class,'viewAboutUs'])->name('aboutUs');
Route::get('/initiatives',[WebSiteController::class,'viewInitiatives'])->name('initiatives');
Route::get('/contact',[WebSiteController::class,'viewContactUs'])->name('contactUs');
Route::post('/contact',[WebSiteController::class,'ContactSave'])->name('contactUs');


Route::get('/admin/login', [AuthController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'authenticate'])->name('admin.authenticate');
Route::get('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


// Category Routes

Route::get('admin/category', [CategoryController::class, 'index'])->name('admin.category.index');
Route::get('admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('admin/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
Route::get('admin/category/edit/{category}', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::put('admin/category/update/{id}', [CategoryController::class,'update'])->name('admin.category.update');
Route::delete('admin/category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.category.delete');

//Sub Category


Route::get('admin/subcategory', [SubCategoryController::class, 'index'])->name('subcategory.index');
Route::get('admin/subcategory/create', [SubCategoryController::class, 'create'])->name('subcategory.create');
Route::post('admin/subcategory/store', [SubCategoryController::class, 'store'])->name('subcategory.store');
Route::get('admin/subcategory/edit/{subCategory}', [SubCategoryController::class, 'edit'])->name('subcategory.edit');
Route::put('admin/subcategory/update/{subCategory}', [SubCategoryController::class,'update'])->name('subcategory.update');
Route::delete('admin/subcategory/delete/{subCategory}', [SubCategoryController::class, 'destroy'])->name('subcategory.delete');


//Products///////


Route::get('admin/product', [ProductController::class, 'index'])->name('product.index');
Route::get('admin/product/create', [ProductController::class, 'create'])->name('product.create');

Route::get('admin/product/fetch-subcategories/{id?}', [ProductController::class, 'fetchSubcategories'])->name('product.fetchSubcategories');

Route::post('admin/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('admin/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::delete('admin/product/delete/{product}', [ProductController::class, 'destroy'])->name('product.delete');
