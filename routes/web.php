<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreferencesController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CobaController;



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
   // Navbar
Route::get('/task2/navbar', function() {
   return view('task2.navbar');
});

      // Preferences Navbar
Route::get('/task2/preferences', function() {
   return view('task2.preferences');
});
      // Crud Preferences
Route::get('/task2/preferences', [PreferencesController::class, 'preferences'])->name('preferences');
Route::get('/task2/preferencestambah', [PreferencesController::class, 'preferencestambah'])->name('preferencestambah');
Route::post('/task2/preferencesinsert', [PreferencesController::class, 'preferencesinsert'])->name('preferencesinsert');
Route::get('/task2/preferencestampil/{id}', [PreferencesController::class, 'preferencestampil'])->name('preferencestampil');
Route::post('/task2/preferencesupdate/{id}', [PreferencesController::class, 'preferencesupdate'])->name('preferencesupdate');
Route::get('/task2/preferencesdelete/{id}', [PreferencesController::class, 'preferencesdelete'])->name('preferencesdelete');



      // Portfolio Navbar
Route::get('/task2/portofolio', function() {
   return view('task2.portofolio');
});
      // Crud Portfolio

Route::get('/task2/portofolio', [PortofolioController::class, 'portofolio'])->name('portofolio');
Route::get('/task2/portofoliotambah', [PortofolioController::class, 'portofoliotambah'])->name('portofoliotambah');
Route::post('/task2/portofolioinsert', [PortofolioController::class, 'portofolioinsert'])->name('portofolioinsert');
Route::get('/task2/portofoliotampil/{id}', [PortofolioController::class, 'portofoliotampil'])->name('portofoliotampil');
Route::post('/task2/portofolioupdate/{id}', [PortofolioController::class, 'portofolioupdate'])->name('portofolioupdate');
Route::get('/task2/portofoliodelete/{id}', [PortofolioController::class, 'portofoliodelete'])->name('portofoliodelete');


      // Contact
Route::get('/task2/contact', function() {
   return view('task2.contact');
});

      // Crud Contact
Route::get('/task2/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/task2/contacttambah', [ContactController::class, 'contacttambah'])->name('contacttambah');
Route::post('/task2/contactinsert', [ContactController::class, 'contactinsert'])->name('contactinsert');
Route::get('/task2/contacttampil/{id}', [ContactController::class, 'contacttampil'])->name('contacttampil');
Route::post('/task2/contactupdate/{id}', [ContactController::class, 'contactupdate'])->name('contactupdate');
Route::get('/task2/contactdelete/{id}', [ContactController::class, 'contactdelete'])->name('contactdelete');


// frontend
Route::get('/task2/template/index', [CobaController::class, 'index'])->name('coba');
