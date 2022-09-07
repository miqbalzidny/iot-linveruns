<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Dashboard App 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Charts Page
Route::get('/voltage-chart', [App\Http\Controllers\ChartControllers\ChartVoltageController::class, 'index'])->name('chart.voltage');
Route::get('/current-chart', [App\Http\Controllers\ChartControllers\ChartCurrentController::class, 'index'])->name('chart.current');
Route::get('/power-chart', [App\Http\Controllers\ChartControllers\ChartPowerController::class, 'index'])->name('chart.power');
Route::get('/energy-chart', [App\Http\Controllers\ChartControllers\ChartEnergyController::class, 'index'])->name('chart.energy');
Route::get('/frequency-chart', [App\Http\Controllers\ChartControllers\ChartFrequencyController::class, 'index'])->name('chart.frequency');
Route::get('/pf-chart', [App\Http\Controllers\ChartControllers\ChartPfController::class, 'index'])->name('chart.pf');

// Tables Page
Route::get('/voltage-table', [App\Http\Controllers\TableControllers\TableVoltageController::class, 'index'])->name('table.voltage');
Route::get('/current-table', [App\Http\Controllers\TableControllers\TableCurrentController::class, 'index'])->name('table.current');
Route::get('/power-table', [App\Http\Controllers\TableControllers\TablePowerController::class, 'index'])->name('table.power');
Route::get('/energy-table', [App\Http\Controllers\TableControllers\TableEnergyController::class, 'index'])->name('table.energy');
Route::get('/frequency-table', [App\Http\Controllers\TableControllers\TableFrequencyController::class, 'index'])->name('table.frequency');
Route::get('/pf-table', [App\Http\Controllers\TableControllers\TablePfController::class, 'index'])->name('table.pf');

// Profile Page
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

// Export Excel
Route::get('voltage/export_excel', [App\Http\Controllers\TableControllers\TableVoltageController::class, 'export_excel'])->name('export.voltage');
Route::get('current/export_excel', [App\Http\Controllers\TableControllers\TableCurrentController::class, 'export_excel'])->name('export.current');
Route::get('power/export_excel', [App\Http\Controllers\TableControllers\TablePowerController::class, 'export_excel'])->name('export.power');
Route::get('energy/export_excel', [App\Http\Controllers\TableControllers\TableEnergyController::class, 'export_excel'])->name('export.energy');
Route::get('frequency/export_excel', [App\Http\Controllers\TableControllers\TableFrequencyController::class, 'export_excel'])->name('export.frequency');
Route::get('pf/export_excel', [App\Http\Controllers\TableControllers\TablePfController::class, 'export_excel'])->name('export.pf');