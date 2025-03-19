<?php

//Controladores requeridos
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DescuentoController;

/*
    RUTAS GENERALES
*/
//Ruta de Index - Inicio Dashboard
Route::get('/', function () {
    return view('construccion');
});

//Ruta de Index - Inicio Ecommerce
Route::get('/dashboard', [ProductoController::class, 'index']);

//Ruta de Control de Sesiones

/*
    RUTAS DASHBOARD
*/
//Rutas para Gestionar Perfil, configuración de cuenta y sitio web


//Rutas para Gestionar Producto
Route::get('/producto', [ProductoController::class, 'index']);
Route::post('/producto/agregar', [ProductoController::class, 'create']);
Route::delete('/producto/{id_producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');
//Route::update('/producto/agregar', [ProductoController::class, 'create']);

//Rutas para Gestionar Categoria
Route::get('/categoria', [ProductoController::class, 'index']);
Route::post('/categoria/agregar', [CategoriaController::class, 'create']);

//Rutas para Gestionar Descuento
Route::post('/descuento/agregar', [DescuentoController::class, 'create']);
Route::get('/descuento', [ProductoController::class, 'index']);

//Rutas para Gestionar Pedidos
Route::get('/pedidos', [ProductoController::class, 'index']);

//Rutas para Gestionar Gastos
Route::get('/gastos', [ProductoController::class, 'index']);

//Rutas para Gestionar Envíos
Route::get('/envios', [ProductoController::class, 'index']);

//Rutas para Gestionar Reportes
Route::get('/reportes', [ProductoController::class, 'index']);

//Rutas para SUPERADMIN

/*
    RUTAS ECOMMERCE
*/
//Rutas para Gestionar Perfil, configuración de cuenta, Mis Pedidos

//Rutas para Gestionar Filtros

//Rutas para Mostrar Productos

//Rutas para Buscar Productos

//Rutas para Gestionar Carrito

//Rutas para Procesar Pago

//Rutas para SUPERADMIN
