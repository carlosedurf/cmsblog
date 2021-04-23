<?php

use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::name('site.')->group(function (){

    /**
     * Main Page
     */
    Route::get('/', HomeController::class)->name('home');

    /**
     * Products Page
     */
    Route::get('produtos', [CategoryController::class, 'index'])->name('products');
    Route::get('produtos/{slug}', [CategoryController::class, 'show'])->name('produtos.show');

    /**
     * Blog Page
     */
    Route::get('blog', BlogController::class)->name('blog');

    /**
     * About Page
     */
    Route::view('sobre', 'site.about.index')->name('about');

    /**
     * Contact Page
     */
    Route::get('contato', [ContactController::class, 'index'])->name('contact');
    Route::post('contato', [ContactController::class, 'form'])->name('contact.form');


});
