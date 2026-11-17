<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

Route::redirect('/', '/routing');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/routing', function() {
    return view('routing');
});
Route::get('/basic_routing', function() {
    return 'Hello World';
});

Route::get('/user/{id}', function($id) {
    return "User Id: ".$id;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return "Post Id: ".$postId.", Comment Id: ".$commentId;
});

Route::get('username/{name?}', function($name = null) {
    return 'Username: '.$name;
});

Route::get('/title/{title}', function($title) {
    return "Title: ".$title;
})->where('title', '[A-Za-z]+');

// Route::get('/route_priority/{rpId}', function($rpId) {
//     return "This is Route One";
// });

Route::get('/route_priority/user', function() {
    return "This is Route 1";
});

Route::get('/route_priority/user', function() {
    return "This is Route 2";
});

Route::get('/profile/{profileId}', [RouteController::class, 'profile'])->name('profileRouteName');

Route::view('/view_route', 'view_route', ['name' => 'Abdika']);
Route::get('/controller_route', [RouteController::class, 'index']);
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard', function() {
        return "This is admin dashboard";
    })->name('dashboard');

    Route::get('/users', function() {
        return "This is user data on admin page";
    })->name('users');

    Route::get('/items', function() {
        return "This is item data on admin page";
    })->name('items');
});
Route::prefix('web-statis')->group(function () {
    Route::view('/', 'index');
    Route::view('/about', 'about');
    Route::view('/portfolio', 'portfolio');
    Route::view('/contact', 'contact');
});

Route::fallback(function() {
    return 'This is Fallback Route';
});
