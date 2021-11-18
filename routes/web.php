<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroServicioController;

use App\Http\Controllers\RegistroCheckListOperativaController;
use App\Http\Controllers\RegistroCheckListProcesoController;
use App\Http\Controllers\RegistroCheckListSeguridadController;


use App\Http\Controllers\RegistroCartaCuarentaHorasController;
use App\Http\Controllers\RegistroCartaCientoVeinteHorasController;
use App\Http\Controllers\RegistroCartaMilHorasController;
use App\Http\Controllers\RegistroCartaDosMilHorasController;


use App\Http\Controllers\CheckListController;
use App\Http\Controllers\HorometroController;
use App\Http\Controllers\InformesController;

use App\Http\Controllers\ReportesPDFController;
use App\Http\Controllers\ReporteCSVController;

use App\Http\Controllers\EstadisticasController;

use App\Http\Controllers\DiagnosticoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - V I S T A S   P A R A   L O S   D O C U M E N6 T O S - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// REGISTRO DE LOS CHECK LIST DE SUPERVICION
Route::get('/diagnostico/PDF', [DiagnosticoController::class, 'diagnostico']);
Route::get('/mapaProcesos/PDF', [DiagnosticoController::class, 'mapaProcesos']);
Route::get('/procedimientoTecnico/PDF', [DiagnosticoController::class, 'procedimientoTecnico']);

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - R E G I S T R O S  D E  S E R V I C I O S - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// REGISTRO DEL PERSONAL EN EL SERVICIO DEL ELEVADOR ALIMAK                                                              
Route::resource('servicio', RegistroServicioController::class);

// REGISTRO DE LOS CHECK LIST DE SUPERVICION
Route::resource('checkListOperativa', RegistroCheckListOperativaController::class);
Route::resource('checkListProceso', RegistroCheckListProcesoController::class);
Route::resource('checkListSeguridad', RegistroCheckListSeguridadController::class);

// REGISTRO DE LAS CARTAS DE MANTENIMIENTO
Route::resource('cartaCuarentaHoras', RegistroCartaCuarentaHorasController::class);
Route::resource('cartaCientoVeinteHoras', RegistroCartaCientoVeinteHorasController::class);
Route::resource('cartaCartaMilHoras', RegistroCartaMilHorasController::class);
Route::resource('cartaCartaDosMilHoras', RegistroCartaDosMilHorasController::class);

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - L I S T A   D E   R E G I S T R O S   H E C H O S - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// LISTA DE LOS REGISTRO YA REALIZADOS
Route::resource('supervicion', CheckListController::class); // Lista de los Check List
Route::resource('informes', InformesController::class); // Lista de los informes del servicion
Route::resource('horometro', HorometroController::class); // Lista de los horometros registrados

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - G E N E R A C I O N   D E   R E P O R T E S   P D F - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// GENERAR REPORTE DEL DEL LISTADO EN EL SERVICIO ENTRADA Y SALIDA ALIMAK
Route::get('/generarReportePorServicio/PDF/{fechaRegistro}/{turno}/{id}', [ReportesPDFController::class, 'generarReportePorServicio']);

// GENERAR REPORTE DE HOROMETROS CON RANGO DE FECHAS
Route::post('/generarReporteHorometro/PDF', [ReportesPDFController::class, 'generarReporteHorometro']);

// GENERAR REPORTE DE LOS CHECK LISTE PERTENECIENTES A SUPERVICION
Route::get('/generarReporteOperativa/PDF/{id}', [ReportesPDFController::class, 'generarReporteOperativa']);
Route::get('/generarReporteProceso/PDF/{id}', [ReportesPDFController::class, 'generarReporteProceso']);
Route::get('/generarReporteSeguridad/PDF/{id}', [ReportesPDFController::class, 'generarReporteSeguridad']);

// GENERAR REPORTES DE LAS CARTAS DE MANTENIMIENTO 40, 120, 1000, 2000 HRS
Route::get('/generarReporteCartaCuarentaHoras/PDF/{id}', [ReportesPDFController::class, 'generarReporteCartaCuarentaHoras']);
Route::get('/generarReporteCartaCientoVeintaHoras/PDF/{id}', [ReportesPDFController::class, 'generarReporteCartaCientoVeintaHoras']);

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - G E N E R A C I O N   D E   R E P O R T E S   C S V - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// GENERAR REPORTE DE HOROMETROS CON RANGO DE FECHAS
Route::post('/generarReporteContratistasFechas/CSV', [ReporteCSVController::class, 'generarReporteSericioContratista']);

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - G E N E R A C I O N   D E   E S T A D I S T I C A S - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// GENERAR REPORTE DEL DEL LISTADO EN EL SERVICIO ENTRADA Y SALIDA ALIMAK
Route::resource('estadisticas', EstadisticasController::class); //


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
