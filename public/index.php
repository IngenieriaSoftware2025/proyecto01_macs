<?php 
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AppController;
use Controllers\RegistroController;
use Controllers\AplicacionController;
use Controllers\PermisosController;
use Controllers\LoginController;
use Controllers\AsignacionPermisosController;

$router = new Router();
$router->setBaseURL('/' . $_ENV['APP_NAME']);
$router->get('/inicio', [AppController::class,'index']);
$router->get('/proyecto01_macs', [LoginController::class,'renderizarPagina']);
$router->get('/', [LoginController::class,'renderizarPagina']);

// Rutas del login
$router->get('/login', [LoginController::class, 'renderizarPagina']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

//usuarios
$router->get('/usuarios', [RegistroController::class, 'renderizarPagina']);
$router->post('/usuarios/guardarAPI', [RegistroController::class, 'guardarAPI']);
$router->get('/usuarios/buscarAPI', [RegistroController::class, 'buscarAPI']);
$router->post('/usuarios/modificarAPI', [RegistroController::class, 'modificarAPI']);
$router->get('/usuarios/eliminar', [RegistroController::class, 'EliminarAPI']);

//aplicaciones
$router->get('/aplicacion', [AplicacionController::class, 'renderizarPagina']);
$router->post('/aplicacion/guardarAPI', [AplicacionController::class, 'guardarAPI']);
$router->get('/aplicacion/buscarAPI', [AplicacionController::class, 'buscarAPI']);
$router->post('/aplicacion/modificarAPI', [AplicacionController::class, 'modificarAPI']);
$router->get('/aplicacion/eliminar', [AplicacionController::class, 'EliminarAPI']);

//permisos
$router->get('/permisos', [PermisosController::class, 'renderizarPagina']);
$router->post('/permisos/guardarAPI', [PermisosController::class, 'guardarAPI']);
$router->get('/permisos/buscarAPI', [PermisosController::class, 'buscarAPI']);
$router->post('/permisos/modificarAPI', [PermisosController::class, 'modificarAPI']);
$router->get('/permisos/eliminar', [PermisosController::class, 'EliminarAPI']);
$router->get('/permisos/buscarAplicacionesAPI', [PermisosController::class, 'buscarAplicacionesAPI']);
$router->get('/permisos/buscarUsuariosAPI', [PermisosController::class, 'buscarUsuariosAPI']);
$router->get('/asignacionpermisos/eliminar', [AsignacionPermisosController::class, 'eliminarAPI']);

//asignacion permisos
$router->get('/asignacionpermisos', [AsignacionPermisosController::class, 'renderizarPagina']);
$router->post('/asignacionpermisos/guardarAPI', [AsignacionPermisosController::class, 'guardarAPI']);
$router->get('/asignacionpermisos/buscarAPI', [AsignacionPermisosController::class, 'buscarAPI']);
$router->post('/asignacionpermisos/modificarAPI', [AsignacionPermisosController::class, 'modificarAPI']);
$router->get('/asignacionpermisos/revocar', [AsignacionPermisosController::class, 'revocarAPI']);
$router->get('/asignacionpermisos/buscarUsuariosAPI', [AsignacionPermisosController::class, 'buscarUsuariosAPI']);
$router->get('/asignacionpermisos/buscarAplicacionesAPI', [AsignacionPermisosController::class, 'buscarAplicacionesAPI']);
$router->get('/asignacionpermisos/buscarPermisosAPI', [AsignacionPermisosController::class, 'buscarPermisosAPI']);
$router->get('/asignacionpermisos/eliminar', [AsignacionPermisosController::class, 'eliminarAPI']);

$router->comprobarRutas();