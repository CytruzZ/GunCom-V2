<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\AuthController;

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

//forum card index
Route::get('/', [ForumController::class, 'index'])->name('index');
Route::post('/forums', [ForumController::class, 'store'])->name('forums.store');
Route::get('/forums/{id}', [ForumController::class, 'show'])->name('forums.show');
Route::post('/forums/{id}/comments', [ForumController::class, 'storeComment'])->name('forums.comment');
Route::put('/forums/{id}', [ForumController::class, 'update'])->name('forums.update');
Route::delete('/forums/{id}', [ForumController::class, 'destroy'])->name('forums.destroy');

// Showcases global index
Route::get('/showcases', [\App\Http\Controllers\ShowcaseController::class, 'index'])->name('showcases.index');

// Search route
Route::get('/run-migration', function() {
    \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
    return \Illuminate\Support\Facades\Artisan::output();
});
Route::get('/search', [\App\Http\Controllers\UserController::class, 'search'])->name('search');

//route untuk user profile public
Route::get('/user/{id}', [\App\Http\Controllers\UserController::class, 'show'])->name('user.profile');
Route::get('/user/{id}/posts', [\App\Http\Controllers\UserController::class, 'posts'])->name('user.posts');
Route::get('/user/{id}/forum', [\App\Http\Controllers\UserController::class, 'forum'])->name('user.forum');
Route::get('/user/{id}/buildlog', [\App\Http\Controllers\UserController::class, 'buildlog'])->name('user.buildlog');
//route untuk guest
Route::middleware('guest')->group(function () {
    Route::get('/signin', [AuthController::class, 'showSignIn'])->name('signin');
    Route::post('/signin', [AuthController::class, 'signIn']);
    Route::get('/signup', [AuthController::class, 'showSignUp'])->name('signup');
    Route::post('/signup', [AuthController::class, 'signUp']);
});

//route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/index-forum', function () {
    return view('index-forum');
}) ->name('index-forum');

Route::get('/category', function () {
    return view('category');
}) ->name('category');

Route::get('/index-discussion', function () {
    return view('index-discussion');
}) ->name('index-discussion');

Route::get('/answer-detail-v2', function () {
    return view('answer-detail-v2');
}) ->name('answer-detail-v2');

Route::get('/group', function () {
    return view('group');
}) ->name('group');

Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('my-profile');
    })->name('profile');

    Route::get('/my-profile', function () {
        return view('my-profile');
    })->name('my-profile');

    Route::get('/auto-login', function() { auth()->loginUsingId(1); return redirect()->route('my-profile.posts'); });

    Route::get('/my-profile/posts', function () {
        return view('my-profile-post');
    })->name('my-profile.posts');

    Route::post('/my-profile/posts', [\App\Http\Controllers\ShowcaseController::class, 'store'])->name('showcases.store');
    Route::put('/my-profile/posts/{id}', [\App\Http\Controllers\ShowcaseController::class, 'update'])->name('showcases.update');
    Route::delete('/my-profile/posts/{id}', [\App\Http\Controllers\ShowcaseController::class, 'destroy'])->name('showcases.destroy');
    Route::post('/showcases/{id}/like', [\App\Http\Controllers\ShowcaseController::class, 'toggleLike'])->name('showcases.like');
    Route::post('/showcases/{id}/comment', [\App\Http\Controllers\ShowcaseController::class, 'storeComment'])->name('showcases.comment');

    Route::get('/my-profile/forum', function () {
        return view('my-profile-question');
    })->name('my-profile.forum');

    Route::get('/my-profile/buildlog', function () {
        $user = auth()->user();
        $ongoingBuilds = $user->buildProjects()->where('status', 'ongoing')->latest()->get();
        $completedBuilds = $user->buildProjects()->where('status', 'completed')->latest()->get();
        return view('my-profile-achievement', compact('user', 'ongoingBuilds', 'completedBuilds'));
    })->name('my-profile.buildlog');

    Route::post('/my-profile/buildlog', [\App\Http\Controllers\BuildController::class, 'store'])->name('build-projects.store');
    Route::put('/my-profile/buildlog/{id}', [\App\Http\Controllers\BuildController::class, 'update'])->name('build-projects.update');
    Route::delete('/my-profile/buildlog/{id}', [\App\Http\Controllers\BuildController::class, 'destroy'])->name('build-projects.destroy');
    
    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');

    Route::post('/settings/update', [\App\Http\Controllers\SettingsController::class, 'updateProfile'])->name('settings.update');
    Route::post('/settings/password', [\App\Http\Controllers\SettingsController::class, 'updatePassword'])->name('settings.password');

    Route::get('/notifications', [\App\Http\Controllers\NotificationController::class, 'index'])->name('notifications.index');
    Route::get('/notifications/{id}/read', [\App\Http\Controllers\NotificationController::class, 'markAsRead'])->name('notifications.read');
    Route::post('/notifications/read-all', [\App\Http\Controllers\NotificationController::class, 'markAllAsRead'])->name('notifications.readAll');
});

Route::get('/help-center', function () {
    return view('index-help-center');
})->name('help-center');

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password')->middleware('guest');

Route::post('/forgot-password', [AuthController::class, 'sendResetLinkEmail'])->name('password.email')->middleware('guest');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset')->middleware('guest');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update')->middleware('guest');