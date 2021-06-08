<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ERPController;
use App\Http\Livewire\ErpView;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return redirect()->route('login');
});

//Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    
    Route::get('/erp/add', [ERPcontroller::class, 'add'])->name('erp.add');
    Route::get('erp/view/{id}', [ERPcontroller::class, 'view']);

});


Route::prefix('erp')->group(function()
{

    Route::get('/erplist', function () {
        return view('erp.erp');
    })->name('erplist');


});