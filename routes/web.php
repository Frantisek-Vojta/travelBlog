<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/category/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');


Route::middleware(['auth'])->group(function () {
    Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
});


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/posts', [AdminController::class, 'index'])->name('posts.index');
});


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {

    $user = \App\Models\User::where('email', request('email'))->first();
    if ($user && \Hash::check(request('password'), $user->password)) {
        auth()->login($user);
        return redirect()->route('home')->with('success', 'Úspěšně přihlášen!');
    }
    return back()->withErrors(['email' => 'Špatné přihlašovací údaje']);
});

Route::post('/logout', function () {
    auth()->logout();
    return redirect()->route('home')->with('success', 'Úspěšně odhlášen!');
})->name('logout');
