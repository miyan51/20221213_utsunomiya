<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;


Route::get('/', [TodoController::class, 'index'])->middleware(['auth'])->name('index');
Route::post('/todos', [TodoController::class, 'add'])->middleware(['auth']);
Route::post('/edit/{id}', [TodoController::class, 'edit'])->middleware(['auth']);
Route::post('/delete/{id}', [TodoController::class, 'delete'])->middleware(['auth']);
Route::get('/search', [TodoController::class, 'search'])->middleware(['auth'])->name('search');




Route::get('/logout', [TodoController::class, 'getLogout'])->name('logout');


/**Route::prefix() // 頭に contacts をつける
    ->middleware(['auth']) // 認証
    ->name('todos.') // ルート名
    ->controller(TodoController::class) // コントローラ指定(laravel9から)
    ->group(
        function () { // グループ化
            Route::get('/', 'index')->name('index'); // 名前つきルート

        }
    ); **/
require __DIR__ . '/auth.php';
