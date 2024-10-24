<?php

use App\Http\Middleware\LogRequests;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route for displaying the login form
Route::get('/', function () {
    return view('home'); // Change to your login view
})->name('home');

// Group routes with LogRequests middleware
Route::middleware([LogRequests::class])->group(function () {
    Route::post('/', function (Request $request) {
        // Handle login verification logic here if needed
        // Redirect to homepage after successful login
        return redirect()->route('home');
    })->name('login.verify');

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/homepage/{username?}', function ($username = 'Guest') {
        return view('homepage', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('homepage');

    Route::get('/about/{username?}', function ($username = 'Guest') {
        return view('about', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('about');

    Route::get('/docuroutes/{username?}', function ($username = 'Guest') {
        return view('docuroutes', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('docuroutes');

    Route::get('/docuviews/{username?}', function ($username = 'Guest') {
        return view('docuviews', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('docuviews');

    Route::get('/doculayout/{username?}', function ($username = 'Guest') {
        return view('doculayout', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('doculayout');

    Route::get('/documiddleware/{username?}', function ($username = 'Guest') {
        return view('documiddleware', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('documiddleware');

    Route::get('/content/{username?}', function ($username = 'Guest') {
        return view('content', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('content');

    Route::get('/contact/{username?}', function ($username = 'Guest') {
        return view('contactPage', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('contactPage');

    Route::get('/contact-us', function () {
        return view('contactForm');
    })->name('contactForm');
});

// Form submission and redirect to the homepage with username
Route::post('/homepage', function (Request $request) {
    $loginType = $request->input('login_type');
    $username = $loginType === 'guest' ? 'Guest' : $request->input('username');
    if ($loginType === 'user') {
        $request->validate(['username' => 'required|alpha']);
    }
    return redirect()->route('homepage', ['username' => $username]);
});

// Logout route
Route::get('/logout', function (Request $request) {
    $request->session()->forget('age'); // This can be removed if no age verification logic is used
    return redirect('/home'); // Redirect to the home page after logout
})->name('logout');
