<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController; // <–– tambah import
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TransactionController; // <–– tambah import
use App\Http\Controllers\profileController; // <–– tambah import
use Symfony\Component\HttpKernel\Profiler\Profile;

// home page of the POS application (root and /home both show the landing)
Route::get('/home', [WelcomeController::class, 'home']);// untuk menampilkan halaman home.blade.php yang berada di dalam folder user
Route::get('/Transaction', [TransactionController::class, 'Transaction']); // untuk menampilkan halaman transaction.blade.php yang berada di dalam folder user
Route::get('/category', [ProductController::class, 'category']); // untuk menampilkan halaman category.blade.php yang berada di dalam folder user
Route::get('/greeting', [ProfileController::class, 'greeting']); // untuk menampilkan halaman profile.blade.php yang berada di dalam folder user
Route::prefix('admin')->group(function () {
    Route::get('category/food-beverage', [ProductController::class, 'category']); // <–– menampilkan kategori admin
    Route::get('category/beauty-health', [ProductController::class, 'category']);
    Route::get('category/home-care', [ProductController::class, 'category']);
    Route::get('category/baby-kid', [ProductController::class, 'category']);
});