<?php


use App\Livewire\About;

use App\Livewire\Actualite;
use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Actualites;
use App\Livewire\ContactPage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class)->name('home');
Route::get('/apropos', About::class)->name('about');
Route::get('/contact', ContactPage::class)->name('contact');
Route::get('/actualites', Actualites::class)->name('actualites');


Route::get('/{category}/{slug}', Actualite::class)->name('actualite');
