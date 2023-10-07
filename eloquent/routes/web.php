<?php

use App\Models\Author;
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
    return view('welcome');
});

// one two one relationship
Route::get('/getage/{user_id}', function ($user_id) {
    $author = Author::find($user_id);
    if ($author) {
        $age = $author->profile->age;
        return $age;
    } else {
        return "Not Found";
    }
});
