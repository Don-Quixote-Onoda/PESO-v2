<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantFormController;

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

Route::get('/', 'PagesController@index');
Route::get('/applicant', [ApplicantFormController::class, 'index'])->name('applicant-form');


Route::get('/emis/public/employer', 'PagesController@employer');
Route::get('/dashboard', 'PagesController@dashboard');

Route::resource('posts', 'PostsController');