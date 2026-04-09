<?php


use App\Livewire\About;

use App\Livewire\Actualite;
use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Actualites;
use App\Livewire\ContactPage;
use App\Livewire\AgroPastoral;
use App\Livewire\CentreMedical;
use App\Livewire\Medias;
use App\Livewire\DepartementTransport;

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
Route::get('/agro-pastoral', AgroPastoral::class)->name('agro-pastoral');
Route::get('/centre-medical-christ-ma-banniere', CentreMedical::class)->name('centre-medical');
Route::get('/departement-transport', DepartementTransport::class)->name('departement-transport');
Route::get('/medias', Medias::class)->name('medias');


Route::get('/{category}/{slug}', Actualite::class)->name('actualite');
