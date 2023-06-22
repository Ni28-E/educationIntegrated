<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Coach;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\Users\RoleController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Users\PermissionController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {

        $count['users'] = count(User::all());
        $count['posts'] = count(Post::all());
        $count['coaches'] = count(Coach::all());
        $count['ebooks'] = 0;
        $count['interactions'] = 0;
        $count['concurrentUsers'] = count(User::all());
        ;


        return view('dashboard', ['count' => $count]);
    }
    )->name('dashboard');


    // appointments
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
    Route::post('/appointments/create', [AppointmentController::class, 'store'])->name('appointments.store');
    /*
    History
    */
    Route::get('/analytics/{id}/details', [AnalyticsController::class, 'details'])->name('analytics.details');


    /*
    Posts
    */

    Route::resource('posts', PostController::class);

    /*
    Coaches
    */
    Route::resource('coaches', CoachController::class);

    /*
    Analytics
    */

    Route::resource('analytics', AnalyticsController::class);

    /*
    Users
    */
    // Users\UserController
    Route::get('/users', [UserController::class, 'index'])->name('users.user.index');
    // Users\RoleController
    Route::get('/users/roles', [RoleController::class, 'index'])->name('users.role.index');
    Route::get('/users/roles/create', [RoleController::class, 'create'])->name('users.role.create');
    Route::post('/users/roles', [RoleController::class, 'store'])->name('users.role.store');
    Route::get('/users/roles/{role}/edit', [RoleController::class, 'edit'])->name('users.role.edit');
    Route::put('/users/roles/{role}', [RoleController::class, 'update'])->name('users.role.update');
    Route::delete('/users/roles/{role}', [RoleController::class, 'destroy'])->name('users.role.destroy');
    // Users\PermissionController
    Route::get('/users/permissions', [PermissionController::class, 'index'])->name('users.permission.index');

    //Blog CRUD
    //Blog this is where all the blogs are displayed with edit and delete buttons behind it
    Route::get('/blogs/show', [App\Http\Controllers\BlogController::class, 'show'])
        ->name('blogs.show');
    //Blog this is where we make the blogs
    Route::get('/blogs/create', [App\Http\Controllers\BlogController::class, 'create'])
        ->name('blogs.create');

    Route::post('/blogs/store', [App\Http\Controllers\BlogController::class, 'store'])
        ->name('blogs.store');
    //Blog this is where we edit the blogs
    Route::get('/blogs/edit/{blog}', [App\Http\Controllers\BlogController::class, 'edit'])
        ->name('blogs.edit');

    Route::patch('/blogs/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])
        ->name('blogs.update');
    //Blog this is where all the blogs are destroyed
    Route::delete('/blogs/destroy/{blog}', [App\Http\Controllers\BlogController::class, 'destroy'])
        ->name('blogs.destroy');

});
//visitors website
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
        ->name('home');

    Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])
        ->name('about');

    Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])
        ->name('contact');

    Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])
        ->name('blog');

    Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])
        ->name('news');

    Route::get('/services', [App\Http\Controllers\ServicesController::class, 'index'])
        ->name('services');

    //Mail
    Route::get('/send', [App\Http\Controllers\MailController::class, 'create'])
        ->name('send');

    Route::post('/store', [App\Http\Controllers\MailController::class, 'store'])
        ->name('store');


