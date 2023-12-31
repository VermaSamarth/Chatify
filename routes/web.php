<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
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

Route::get('/', function () {
    return view('auth.register');
});


Route::middleware(['auth','verified'])->group(function(){

    // ------------ Personal Chats -------------
    Route::get('/chats',[ChatController::class,'display_chat'])->name('chats');

    Route::get('/chats/section/{id}',[ChatController::class,'open_chat'])->name('chat-section');

    Route::post('/chats/message-input/{id}',[ChatController::class,'chat_message'])->name('chat-message');

    Route::get('/chats/new-chat',[ChatController::class,'new_chat'])->name('new-chat');
    
    // ------------- Group Chats ---------------
    Route::get('/groups',function(){
        return view('groups');
    })->name('groups');

    // ------------ Contacts --------------
    Route::get('/contacts',[ContactsController::class,'display_buddies'])->name('buddies');

    Route::get('/contacts/form',[ContactsController::class,'add_contacts_form'])->name('form_contacts');

    Route::post('contacts/add',[ContactsController::class,'add_contacts'])->name('add_contacts');

    // -------------- Search Menu --------------
    Route::get('/contacts/search', [SearchController::class, 'index']);

    Route::get('/contacts/autosearch',[SearchController::class,'autocompleteSearch'])->name('auto-search');

    // -------------- About --------------
    Route::get('/about',function(){
        return view('aboutus');
    })->name('about');
});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
