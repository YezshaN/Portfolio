<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\LogRequest;

// Group routes that use LogRequest middleware
Route::middleware([LogRequest::class])->group(function () {

    // Login route
    Route::get('/', function () {
        return view('login');
    })->name('login');

    // Route to handle the username and age submission
    Route::post('/set-username', function (Request $request) {
        
        $request->validate([
            'username' => 'required|string|max:255', 
            'age' => 'required|integer', 
        ]);

        $username = $request->input('username');
        $age = $request->input('age');

        // Store the username and age in the session
        session(['username' => $username, 'age' => $age]);

        // Redirect to the home page, middleware will handle age validation
        return redirect()->route('home');
    })->name('set-username');

    // About page route
    Route::get('/about', function () {
        $username = session('username', 'Guest');
        return view('about', ['username' => $username]);
    })->name('about');

    // Content page route
    Route::get('/works', function () {
        $username = session('username', 'Guest');
        return view('works', ['username' => $username]);
    })->name('works');

    // Contact Us page route
    Route::get('/contact', function () {
        $username = session('username', 'Guest');
        return view('contact', ['username' => $username]);
    })->name('contact');

    // Access Denied route
    Route::get('/accessDenied', function () {
        \Log::info('Access Denied page visited');
        return view('accessDenied'); 
    })->name('accessDenied');
});

    //Projects Routes
Route::get('/projects/project1', function () {
    $username = session('username', 'Guest');
    return view('project1', ['username' => $username]);
})->name('project1');

Route::get('/projects/project2', function () {
    $username = session('username', 'Guest');
    return view('project2', ['username' => $username]);
})->name('project2');

Route::get('/projects/project3', function () {
    $username = session('username', 'Guest');
    return view('project3', ['username' => $username]);
})->name('project3');

Route::get('/projects/project4', function () {
    $username = session('username', 'Guest');
    return view('project4', ['username' => $username]);
})->name('project4');

// Home route for users older than 15
Route::get('/home', function () {
    $username = session('username', 'Guest');
    $age = session('age', 0); 
    \Log::info("Username: $username, Age: $age");
    return view('home', ['username' => $username]);
})->middleware([CheckAge::class, LogRequest::class])->name('home'); 
