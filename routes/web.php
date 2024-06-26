<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;


//HomeController
Route::get('/',[HomeController::class,'index'])->name('home.index')->middleware('auth');


//Usuarios Controllers 

Route::get('/usuarios/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::post('/usuarios/autenticar',[UsuariosController::class,'autenticar'])->name('usuarios.autenticar');
//*Usuarios Controllers
