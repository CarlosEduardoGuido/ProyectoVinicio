<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\consultorio;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Administrador;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PaymentController;

Route::name('index')->get('/', function () {
    return view('welcome1');
})->middleware('auth');

//----------VISTA ADMINISTRADOR---------
Route::group(['middleware' => 'AdminAuth'], function () {
    Route::name('admin')->get('admin/',[consultorio::class,'admin']);
    Route::name('usuarios')->get('usuarios/',[Administrador::class,'usuarios']);
    Route::name('citas')->get('citas/',[Administrador::class,'citas']);
    Route::name('doctores')->get('doctores/',[Administrador::class,'doctores']);
    Route::name('especialidades')->get('especialidades/',[Administrador::class,'especialidades']);
    Route::name('historial')->get('historial/',[Administrador::class,'historial']);
    Route::name('crearhistorial')->get('crearhistorial/{id}',[Administrador::class,'crearhistorial']);
    Route::name('salvarhistorial')->post('salvarhistorial/',[Administrador::class,'salvarhistorial']);
    Route::name('detallehistorial')->get('detallehistorial/{id}',[Administrador::class,'detallehistorial']);
    Route::name('borrarhistorial')->get('borrarhistorial/{id}',[Administrador::class,'borrarhistorial']);
    Route::name('editarhistorial')->get('editarhistorial/{id}',[Administrador::class,'editarhistorial']);
    Route::name('guardarhistorial')->put('guardarhistorial/{id}',[Administrador::class,'guardarhistorial']);
        //-----------GUARDAR/DOCTORES----------------
    Route::name('altadoctores')->get('/altadoctores',[consultorio::class,'altadoctores']);
    Route::name('salvardoctores')->post('/salvardoctores',[consultorio::class,'salvardoctores']);
    //--------DETALLE/DOCTORES----------------
    Route::name('detalle2')->get('detalle2/{id}',[consultorio::class,'detalle2']);
    //----------EDITAR/DOCTORES------------------
    Route::name('editar2')->get('editar2/{id}',[consultorio::class,'editar2']);
    Route::name('salvar2')->put('salvar2/{id}',[consultorio::class,'salvar2']);
    //---------BORRAR/DOCTORES--------------------
    Route::name('borrar2')->get('borrar2/{id}',[consultorio::class,'borrar2']);
    //--------DETALLE/ESPECIALIDAD----------------
    Route::name('detalle3')->get('detalle3/{id}',[consultorio::class,'detalle3']);
    //----------EDITAR/ESPECIALIDAD------------------
    Route::name('editar3')->get('editar3/{id}',[consultorio::class,'editar3']);
    Route::name('salvar3')->put('salvar3/{id}',[consultorio::class,'salvar3']);
    //---------BORRAR/ESPECIALIDAD--------------------
    Route::name('borrar3')->get('borrar3/{id}',[consultorio::class,'borrar3']);
    Route::name('altaespecialidad')->get('/altaespecialidad',[consultorio::class,'altaespecialidad']);
    Route::name('salvarespecialidad')->post('/salvarespecialidad',[consultorio::class,'salvarespecialidad']);
    //--------DETALLE USUARIO----------------
    Route::name('detalle')->get('detalle/{id}',[consultorio::class,'detalle']);
    //--------EDITAR USUARIO------------------
    Route::name('editar')->get('editar/{id}',[consultorio::class,'editar']);
    Route::name('salvar')->put('salvar/{id}',[consultorio::class,'salvar']);
    //--------GUARDAR USUARIO----------------
    Route::name('altausuario')->get('/altausuario',[consultorio::class,'altausuario']);
    Route::name('salvarusuario')->post('/salvarusuario',[consultorio::class,'salvarusuario']);
    //-------BORRAR PACIENTE----------------
    Route::name('borrar')->get('borrar/{id}',[consultorio::class,'borrar']);
    //------------------------------------RUTAS CITAS-----------------------------------//
    //-----------GUARDAR/CITAS--------------------
    Route::name('altacitas')->get('/altacitas',[consultorio::class,'altacitas']);
    Route::name('salvarcitas')->post('/salvarcitas',[consultorio::class,'salvarcitas']);
    //------------DETALLE/CITA----------------------
    Route::name('detalle1')->get('detalle1/{id}',[consultorio::class,'detalle1']);
    //-----------EDITAR/CITA-----------------
    Route::name('editar1')->get('editar1/{id}',[consultorio::class,'editar1']);
    Route::name('salvar1')->put('salvar1/{id}',[consultorio::class,'salvar1']);
    //---------BORRAR/CITA--------------------
    Route::name('borrar1')->get('borrar1/{id}',[consultorio::class,'borrar1']);
    //--------------------Productos--------------------
    Route::name('productos')->get('productos/',[Administrador::class,'productos']);
    Route::name('detalleP')->get('detalleP/{id}',[Administrador::class,'detalleP']);
    Route::name('editarP')->get('editarP/{id}',[Administrador::class,'editarP']);
    Route::name('salvarP')->put('salvarP/{id}',[Administrador::class,'salvarP']);
    Route::name('borrarP')->get('borrarP/{id}',[Administrador::class,'borrarP']);
    Route::name('salvarProductos')->post('/salvarProductos',[Administrador::class,'salvarProductos']);
    Route::name('altaproductos')->get('/altaproductos',[Administrador::class,'altaproductos']);
    ///excel///
    Route::get('/excel', 'App\Http\Controllers\Administrador@export')->name('excel');



});

Route::group(['middleware' => 'auth'], function () {
    //---------CARRITO--------------------
    Route::get('/shop', [CartController::class, 'shop'])->name('shop');
    Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
    Route::post('/add', [CartController::class, 'add'])->name('cart.store');
    Route::post('/update', [CartController::class, 'update'])->name('cart.update');
    Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
    //-----------------Agendar Cita ---------------------------------------------------
    Route::name('agendarCita')->get('agendarCita/',[consultorio::class,'agendarCita']);
    //--------- DESCARGAR PDF RECETA------------------------------------------------------------------------
    Route::name('descargareceta')->get('descargareceta/{receta}',[Administrador::class,'descargareceta']);
    //--------HISTORIAL  VISTA USUARIO-----------------
    Route::name('historialusr')->get('historialusr/',[Administrador::class,'historialusr']);
    //--------AGENDAR CITAS-----------------
    Route::name('agendarc')->post('agendarc/',[consultorio::class,'agendarc']);
    ////// Correo////
    Route::get('/enviar-form', [MailController::class, 'formEmail'])->name('enviar-form');
    Route::get('/enviar-emial', [MailController::class, 'sendEmail'])->name('enviar-emial');
    //----------------PAYPAL-------------------------
    Route::get('payment', 'App\Http\Controllers\PaymentController@index');
    Route::post('charge', 'App\Http\Controllers\PaymentController@charge');
    Route::get('success', 'App\Http\Controllers\PaymentController@success');
    Route::get('error', 'App\Http\Controllers\PaymentController@error');
    Route::get('/pago', [PaymentController::class, 'pago'])->name('pago.index');
});
//---------SESIONES--------------------------------------------------------
Route::name('login')->get('login/',[LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login1', [SessionsController::class, 'create'])->middleware('guest')->name('login.create');
Route::post('/login1', [SessionsController::class, 'store'])->name('login.store');
Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('login.destroy');
//---------AVISO DE PRIVACIDAD--------------
Route::name('aviso')->get('aviso/',[RegisterController::class,'aviso']);










