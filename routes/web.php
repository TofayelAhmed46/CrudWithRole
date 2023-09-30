<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagecrudController;
use App\Http\Controllers\CrudmodelController;
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

Route::get('/', function () {
    return view('welcome');
});

// crud 
Route::get('/index', [ImagecrudController::class,'index'])->name('index.data');
Route::get('/create', [ImagecrudController::class,'create'])->name('create.data');
Route::post('/store', [ImagecrudController::class,'store'])->name('store.data');
Route::get('/update/{id}', [ImagecrudController::class,'edit'])->name('store.data');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});



Route::get('/crud/index', [CrudmodelController::class, 'index'])->name('crud.index');
Route::get('/crud/create', [CrudmodelController::class, 'create'])->name('crud.create');
Route::post('/crud/store', [CrudmodelController::class, 'store'])->name('crud.store');
Route::get('/crud/view', [CrudmodelController::class, 'view'])->name('crud.view');
Route::get('/crud/edit/{id}', [CrudmodelController::class, 'edit'])->name('crud.edit');
Route::patch('/crud/update/{id}', [CrudmodelController::class, 'update'])->name('crud.update');
Route::delete('/crud/delete/{id}', [CrudmodelController::class, 'destroy'])->name('crud.delete');








require __DIR__.'/auth.php';
