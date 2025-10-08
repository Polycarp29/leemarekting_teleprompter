<?php

use App\Livewire\Pages\Faqs;
use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\AboutPage;
use App\Livewire\Pages\PricingPage;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', HomePage::class)->name('home.page');
Route::get('/pricing', PricingPage::class)->name('pricing.page');
Route::get('/about', AboutPage::class)->name('about.page');
Route::get('/faqs', Faqs::class)->name('faqs.page');

