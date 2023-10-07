<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// define a route and show welcome message;

Route::get('/welcome', function () {
    return "Welcome!";
});

// define a route and show information;
Route::get('/info', function () {
    return 'I am Anonymous! ';
});

// redirect welcome to info route;
// Route::redirect('/welcome', '/info', 301);

// use permanent method to return a 301 status code;
Route::permanentRedirect('/welcome', '/info');
// declare a view route and show some data;

Route::view('/contact', 'contact', ['name' => 'Tylor Smith']);

// route parameters;
// required Parameters;
Route::get('/users/{id}', function (int $id) {
    return 'User ' . $id;
});

Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentID) {
    return 'Posts ' . $postId . ' comments ' . $commentID;
});

// Optional parameters
// Route::get('/user/{name?}', function (string $name = null) {
//     return $name;
// });

// Route::get('/user/{name?}', function (string $name = 'John') {
//     return $name;
// });

// Regualr Expression;
// Route::get('/login/{user}', function (string $name) {
//     return 'User Name is ' . $name . ' Format is String';
// })->where('name', '[A-Za-z]+');

// Route::get('/login/{id}', function (string $loginId) {
//     return 'Login Id is ' . $loginId . ' Format is String';
// })->where('loginID', '[0-9]+');

Route::get('/user/{id}/{name}', function (string $userId, string $userName) {
    return 'userid: ' . $userId . ' UserName: ' . $userName;
})->where([
    'userId' => '[0-9]+',
    'userName' => '[a-z]+',
]);
