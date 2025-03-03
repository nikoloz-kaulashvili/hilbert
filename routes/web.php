<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'main'])->name('website.main');
Route::get('/services', [WebsiteController::class, 'services'])->name('website.services');
Route::get('/works', [WebsiteController::class, 'works'])->name('website.works');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');
Route::post('/contact', [WebsiteController::class, 'contactSend'])->name('contact.send');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('website.components.main');
    })->name('dashboard');
});
