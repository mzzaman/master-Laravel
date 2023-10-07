<?php

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

$posts = [
    1 => [
        'title' => 'learning php',
        'description' => 'php is awesome',
    ],
    2 => [
        'title' => ' learning laravel',
        'description' => 'laravel is awesome',
    ],
];

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () use ($posts) {
    return view('home', ['posts' => $posts]);
})->name('home');