<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\EditPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UpdatePageController;
use App\Http\Middleware\UserVerificationMiddleware;
use App\Livewire\ChatComponent;
use App\Livewire\EditPage;
use App\Livewire\FriendRequests;
use App\Livewire\Home;
use App\Livewire\Page;
use App\Livewire\Peoples;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', EnsureEmailIsVerified::class, UserVerificationMiddleware::class])->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/explore', Peoples::class)->name('explore');
    Route::get('/friend-requests', FriendRequests::class)->name('requests');
    Route::get('/page/{uuid}', Page::class)->name('user.page');
    Route::get('/page/{uuid}/edit', EditPageController::class)->name('user.page.edit');
    Route::patch('/page/{uuid}/update', UpdatePageController::class)->name('user.page.update');

    Route::get('/chats', [ChatController::class, 'getChats'])->name('user.chat.list');
    Route::get('/chat/{uuid}', [ChatController::class, 'chatWith'])->name('user.chat');
    //    Route::post('/send-message', [ChatController::class, 'sendMessage'])->name('send.message');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', EnsureEmailIsVerified::class, UserVerificationMiddleware::class])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

