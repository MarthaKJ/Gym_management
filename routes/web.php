<?php

use App\Http\Controllers\AdminEnquiryController;
use App\Http\Controllers\AdminExpenseCategoryController;
use App\Http\Controllers\AdminExpenseController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminMemberController;
use App\Http\Controllers\AdminPlanController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminSettingController;
use App\Http\Controllers\AdminStaffController;
use App\Http\Controllers\AdminSubscriptionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Usercontroller;
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

// --------------------------------------------------------------------
// ------HOME ROUTES----
// --------------------------------------------------------------------
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// --------------------------------------------------------------------
// ------ADMIN ROUTES----
// --------------------------------------------------------------------

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get("/", [AdminHomeController::class, 'index']);
    Route::resource("/dashboard", AdminHomeController::class);
    Route::resource("/members", AdminMemberController::class);
    Route::resource("/staff", AdminStaffController::class);
    Route::resource("/plans", AdminPlanController::class);
    Route::resource("/services", AdminServiceController::class);
    Route::resource("/subscriptions", AdminSubscriptionController::class);
    Route::resource("/expenses", AdminExpenseController::class);
    Route::resource("/categories", AdminExpenseCategoryController::class);
    Route::resource("/users", Usercontroller::class);
    Route::resource("/enquiries", AdminEnquiryController::class);
    Route::get('/replies', [AdminProfileController::class, 'reply'])->name('enquiries.reply');
    Route::post('/replies', [AdminProfileController::class, 'store'])->name('enquiries.reply');
    Route::resource("/settings", AdminSettingController::class);
    Route::get('/profile', [AdminProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [AdminProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [AdminProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';