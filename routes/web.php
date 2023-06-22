<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;




//*===================================================================================*/
//*============================== TABLEAU DE BORD ADMIN  =============================*/
//*===================================================================================*/

//*================================ DASHBOARD ROUTES

Route::get('/', [AdminController::class, 'dashboard'])->name("dashboard")->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


