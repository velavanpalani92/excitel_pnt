<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\PartnerView;
use App\Http\Livewire\PartnerListing;
use App\Http\Livewire\ViewCategory;
use App\Http\Livewire\ViewVendor;
use App\Http\Livewire\ViewInward;
use App\Http\Livewire\ViewOutward;


Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();
Auth::routes(['register' => true]);
//Home Page
Route::get('/home', [HomeController::class, 'index'])->name('home');
//Partner List
Route::get('/partner/list', PartnerListing::class)->name('partner.list');
//Partner View
Route::get('partner/view/{partnercode}', PartnerView::class)->name('partner.view');
//Category
Route::get('inventory/category', ViewCategory::class )->name('category.view');
//Vendor
Route::get('inventory/vendor', ViewVendor::class )->name('vendor.view');
//Inward
Route::get('inventory/inward', ViewInward::class )->name('inward.view');
//Outward
Route::get('inventory/outward', ViewOutward::class )->name('outward.view');


