<?php

use App\Http\Controllers\HomepageController;
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

Route::get('/', function () {
    return view('welcome', [
        'title_to_hero' => 'Curated, high quality style inspiration.',
        'text_to_hero' => 'New looks every week.',
        'link_to_hero' => '/explore',
        'label_to_hero' => 'Explore now'
    ]);
});

Route::get('/about', [HomepageController::class, 'about']);
Route::get('/explore', [HomepageController::class, 'explore']);
