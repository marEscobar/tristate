<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Review;
use App\Models\Blog;

Route::get('/', function () {
    $reviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();
    return view('home', compact('reviews'));
});

Route::get('/welcome2', function () {
    $reviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
    return view('welcome2', ['reviews' => $reviews]);
});

Route::get('/welcome3', function () {
    $reviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
    return view('welcome3', ['reviews' => $reviews]);
});

Route::get('/welcome4', function () {
    $reviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
    return view('welcome4', ['reviews' => $reviews]);
});

Route::get('/exterior-signs', function () {
    $reviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
    return view('exterior-signs', ['reviews' => $reviews]);
});

Route::get('/interior-signs', function () {
    $reviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
    return view('interior-signs', ['reviews' => $reviews]);
});

Route::get('/commercial-awnings', function () {
    $reviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
    return view('commercial-awnings', ['reviews' => $reviews]);
});

Route::get('/residential-awnings', function () {
    $reviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
    return view('residential-awnings', ['reviews' => $reviews]);
});

Route::get('/installations', function () {
    $reviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
    return view('installations', ['reviews' => $reviews]);
});

Route::get('/led-displays', function () {
    $reviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
    return view('led-displays', ['reviews' => $reviews]);
});

Route::get('/permits', function () {
    $reviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
    return view('permits', ['reviews' => $reviews]);
});

Route::get('/gallery', function () {
    $reviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
    return view('gallery', ['reviews' => $reviews]);
});

Route::get('/reviews', function () {
    $latestReviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
    return view('reviews', ['latestReviews' => $latestReviews]);
});

// Blog post routes (specific routes must come before the general /blog route)
Route::get('/blog/choosing-exterior-signage', function () {
    return view('blog.choosing-exterior-signage');
});

Route::get('/blog/led-display-technology', function () {
    return view('blog.led-display-technology');
});

Route::get('/blog/commercial-awnings-guide', function () {
    return view('blog.commercial-awnings-guide');
});

Route::get('/blog/sign-permits-guide', function () {
    return view('blog.sign-permits-guide');
});

Route::get('/blog/sign-maintenance-tips', function () {
    return view('blog.sign-maintenance-tips');
});

// General blog listing route (must come after specific blog routes)
Route::get('/blog', function () {
    $blogs = Blog::where('is_published', true)
        ->orderBy('published_at', 'desc')
        ->orderBy('created_at', 'desc')
        ->get();
    $latestReviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
    return view('blog', ['blogs' => $blogs, 'latestReviews' => $latestReviews]);
});

Route::get('/faqs', function () {
    $reviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
    return view('faqs', ['reviews' => $reviews]);
});

Route::get('/request-call-back', function () {
    $reviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
    return view('request-call-back', ['reviews' => $reviews]);
});

Route::get('/contact-us', function () {
    $reviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
    return view('contact-us', ['reviews' => $reviews]);
});

Route::get('/about', function () {
    $reviews = Review::where('is_approved', true)
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
    return view('about', ['reviews' => $reviews]);
});

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



// Review Public Route (for submitting reviews from frontend)
Route::post('/reviews/public', [ReviewController::class, 'storePublic'])->name('reviews.storePublic');


// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Blog CRUD Routes
    Route::resource('blogs', BlogController::class);
    // Review CRUD Routes (Admin)
    Route::resource('reviews', ReviewController::class);
    Route::post('/reviews/{review}/toggle-approval', [ReviewController::class, 'toggleApproval'])->name('reviews.toggleApproval');

    // Permission, Role, and User Management Routes
    Route::resource('permissions', PermissionController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

require __DIR__ . '/auth.php';
