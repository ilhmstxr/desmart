<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FarmController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\CropController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Protected routes
// Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Farm management (Admin and Managers only)
    Route::middleware('role:admin,manager')->group(function () {
        Route::resource('farms', FarmController::class);
    });
    
    // Field and Crop management (All authenticated users)
    Route::resource('fields', FieldController::class);
    Route::resource('crops', CropController::class);
    
    // Schedule management (All authenticated users)
    Route::resource('schedules', ScheduleController::class);
    
    // Weather monitoring (All authenticated users)
    Route::get('/weather', [WeatherController::class, 'index'])->name('weather.index');
    Route::post('/weather/fetch', [WeatherController::class, 'fetchWeather'])->name('weather.fetch');
    Route::get('/weather/history', [WeatherController::class, 'history'])->name('weather.history');
    
    // Settings (Profile for all, System settings for admin only)
    Route::get('/settings/profile', [SettingsController::class, 'profile'])->name('settings.profile');
    Route::put('/settings/profile', [SettingsController::class, 'updateProfile'])->name('settings.profile.update');
    
    // Finance management (All authenticated users)
    Route::get('/finances', [FinanceController::class, 'index'])->name('finances.index');
    Route::resource('products', ProductController::class);
    Route::resource('marketplace', MarketplaceController::class);
    Route::resource('sales', SaleController::class);
    Route::resource('expenses', ExpenseController::class);

    // User management and system settings (Admin only)
    Route::middleware('role:admin')->group(function () {
        Route::resource('users', UserController::class);
        Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::put('/settings', [SettingsController::class, 'update'])->name('settings.update');
    });
// });
