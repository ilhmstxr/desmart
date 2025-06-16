<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\SettingsController;
use App\Http\Controllers\DashboardController;


use App\Http\Controllers\farms\FarmController;
use App\Http\Controllers\farms\FieldController;
use App\Http\Controllers\farms\CropController;
use App\Http\Controllers\farms\ScheduleController;


use App\Http\Controllers\finances\FinanceController;
use App\Http\Controllers\finances\ProductController;
use App\Http\Controllers\finances\MarketplaceController;
use App\Http\Controllers\finances\ExpenseController;
use App\Http\Controllers\finances\SaleController;


use App\Http\Controllers\UserController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/login', function () {
    return redirect('/login');
});
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
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Farm management (Admin and Managers only)
Route::middleware('role:admin,manager')->group(function () {
    Route::resource('farms', FarmController::class);
});

// Field and Crop management (All authenticated users)
Route::resource('fields', FieldController::class);
route::prefix('crops')->group(function () {
    Route::get('/maintenance', [CropController::class, 'maintenance'])->name('crops.maintenance');
    Route::get('/harvest', [CropController::class, 'harvest'])->name('crops.harvest');
});
Route::resource('/crops', CropController::class);

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



Route::Resource('tools', ToolController::class);
// User management and system settings (Admin only)
Route::middleware('role:admin')->group(function () {
    Route::resource('users', UserController::class);
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingsController::class, 'update'])->name('settings.update');
});

route::get('/tambahcrops', function () {
    return view('crops.tambah');
});

route::get('/14', function () {
    return view('crops.maintenance');
});
route::get('/16', function () {
    return view('harvest.add');
});
route::get('/11', function () {
    return view('field.add');
});
route::get('/13', function () {
    return view('field.review');
});
route::get('/10', function () {
    return view('livestock.10');
});
route::get('/18', function () {
    return view('schedules.18'); // add jadwal
});
route::get('/19', function () {
    return view('schedules.19'); // cek jadwal
});
route::get('/20', function () {
    return view('schedules.20'); // dashboard
});
route::get('/1', function () {
    return view('field.location'); // location
});
route::get('/3', function () {
    return view('field.details'); // field
});
// });
