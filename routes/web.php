<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\SecretariumController;
use App\Http\Controllers\UnidadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['prefix' => "admin", 'middleware' => ['auth', 'AdminPanelAccess']], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('/users', UserController::class);
    Route::resource('/roles', 'RoleController');
    Route::resource('/permissions', 'PermissionController')->except(['show']);



    Route::controller(UnidadController::class)->prefix('unidad')->group(function () {
        Route::get('index', 'index')->name('unidad.index');
        Route::get('show/{id}', 'show')->name('unidad.show');
        Route::get('edit/{id}', 'edit')->name('unidad.edit');
        Route::get('registro', 'create')->name('unidad.create');
        Route::post('store', 'store')->name('unidad.store');
        Route::put('update/{id}', 'update')->name('unidad.update');
        Route::delete('delete/{id}', 'destroy')->name('unidad.destroy');
    });


    Route::controller(GradoController::class)->prefix('grado')->group(function () {
        Route::get('index', 'index')->name('grados.index');
        Route::get('show/{id}', 'show')->name('grados.show');
        Route::get('edit/{id}', 'edit')->name('grados.edit');
        Route::get('registro', 'create')->name('grados.create');
        Route::post('store', 'store')->name('grados.store');
        Route::put('update/{id}', 'update')->name('grados.update');
        Route::delete('delete/{id}', 'destroy')->name('grados.destroy');
    });

    Route::controller(ProfesorController::class)->prefix('profesor')->group(function () {
        Route::get('index', 'index')->name('profesors.index');
        Route::get('show/{id}', 'show')->name('profesors.show');
        Route::get('edit/{id}', 'edit')->name('profesors.edit');
        Route::get('registro', 'create')->name('profesors.create');
        Route::post('store', 'store')->name('profesors.store');
        Route::put('update/{id}', 'update')->name('profesors.update');
        Route::delete('delete/{id}', 'destroy')->name('profesors.destroy');
    });

    Route::controller(SecretariumController::class)->prefix('secretaria')->group(function () {
        Route::get('index', 'index')->name('secretaria.index');
        Route::get('show/{id}', 'show')->name('secretaria.show');
        Route::get('edit/{id}', 'edit')->name('secretaria.edit');
        Route::get('registro', 'create')->name('secretaria.create');
        Route::post('store', 'store')->name('secretaria.store');
        Route::put('update/{id}', 'update')->name('secretaria.update');
        Route::delete('delete/{id}', 'destroy')->name('secretaria.destroy');
    });


    Route::controller(EstudianteController::class)->prefix('estudiantes')->group(function () {
        Route::get('index', 'index')->name('estudiantes.index');
        Route::get('show/{id}', 'show')->name('estudiantes.show');
        Route::get('edit/{id}', 'edit')->name('estudiantes.edit');
        Route::get('registro', 'create')->name('estudiantes.create');
        Route::post('store', 'store')->name('estudiantes.store');
        Route::put('update/{id}', 'update')->name('estudiantes.update');
        Route::delete('delete/{id}', 'destroy')->name('estudiantes.destroy');
    });
});
