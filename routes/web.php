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

// user 

Route::get('/', [App\Http\Controllers\user\HomeController::class, 'index'])->name('home');

Route::middleware(['user'])->group(function () {

Route::get('user/courier/createform', [App\Http\Controllers\user\CourierController::class, 'createform'])->name('user.courier.createform');
Route::get('user/courier/show/{user_id}', [App\Http\Controllers\user\CourierController::class, 'index'])->name('user.courier.show');
Route::get('user/courier/delete/{id}', [\App\Http\Controllers\user\CourierController::class, 'delete'])->name('user.courier.delete');

Route::post('user/courier/create', [\App\Http\Controllers\user\CourierController::class, 'create'])->name('user.courier.create');

});


/// Auth

Route::get('/register/form', [App\Http\Controllers\AuthController::class, 'register_form'])->name('register.form');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::get('/login/form', [App\Http\Controllers\AuthController::class, 'login_form'])->name('login.form');
Route::get('user/login/form', [App\Http\Controllers\AuthController::class, 'user_login_form'])->name('user.login.form');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


/// Couriers
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index'])->name('admin.dashboard');
////////////////////  Admin Routes \\\\\\\\\\\\\\\\\\\\\\\\\\
    Route::get('admin/couriers', [App\Http\Controllers\admin\CourierController::class, 'index'])->name('admin.couriers');
    Route::get('admin/createform', [App\Http\Controllers\admin\CourierController::class, 'createform'])->name('admin.courier.createformer');
    Route::get('admin/couriers/edit/{id}', [\App\Http\Controllers\admin\CourierController::class, 'edit'])->name('admin.courier.edit');
    Route::post('admin/courier/create', [\App\Http\Controllers\admin\CourierController::class, 'create'])->name('admin.courier.create');
    Route::get('admin/courier/delete/{id}', [\App\Http\Controllers\admin\CourierController::class, 'delete'])->name('admin.courier.delete');
    Route::post('admin/courier/update', [\App\Http\Controllers\admin\CourierController::class, 'update'])->name('admin.courier.update');


    /// Agents
    Route::get('admin/agents', [App\Http\Controllers\admin\AgentController::class, 'index'])->name('admin.agents');
    Route::get('admin/agents/createform', [App\Http\Controllers\admin\AgentController::class, 'createform'])->name('admin.createform');
    Route::post('admin/agent/create', [\App\Http\Controllers\admin\AgentController::class, 'create'])->name('admin.agent.create');
    Route::get('admin/agent/edit/{id}', [\App\Http\Controllers\admin\AgentController::class, 'edit'])->name('admin.agent.edit');
    Route::get('admin/agent/delete/{id}', [\App\Http\Controllers\admin\AgentController::class, 'delete'])->name('admin.agent.delete');
    Route::post('admin/agent/update', [\App\Http\Controllers\admin\AgentController::class, 'update'])->name('admin.agent.update');


    // Message

    Route::get('admin/messages', [App\Http\Controllers\admin\MessageController::class, 'index'])->name('admin.message');
    Route::post('admin/message/send', [App\Http\Controllers\admin\MessageController::class, 'send'])->name('admin.message.send');
    Route::get('admin/show/messages/{id}', [App\Http\Controllers\admin\MessageController::class, 'show_messages'])->name('admin.show.message');


    ////////////////////  Agent Routes \\\\\\\\\\\\\\\\\\\\\\\\\\

    Route::get('agent/couriers/{id}', [App\Http\Controllers\agent\CourierController::class, 'index'])->name('agent.couriers');
    Route::get('agent/show/messages/{id}', [App\Http\Controllers\agent\MessageController::class, 'index'])->name('agent.messages');

});
