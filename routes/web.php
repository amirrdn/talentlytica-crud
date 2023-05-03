<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantController;
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

Route::get('/', [ParticipantController::class, 'index'])->name('index-participant');
Route::get('/partipant-create', [ParticipantController::class, 'create'])->name('create-participant');
Route::post('/partipant-store', [ParticipantController::class, 'store'])->name('store-participant');
Route::get('/partipant-view/{id}', [ParticipantController::class, 'view'])->name('view-participant');
Route::post('/partipant-update', [ParticipantController::class, 'update'])->name('update-participant');
Route::get('/partipant-delete/{id}', [ParticipantController::class, 'destroy'])->name('delete-participant');
Route::get('/partipant-report/{id}', [ParticipantController::class, 'reportByuser'])->name('report-participant');
