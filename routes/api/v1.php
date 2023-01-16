<?php

declare(strict_types=1);

use App\Http\Controllers\Api\V1\Posts\DeleteController;
use App\Http\Controllers\Api\V1\Posts\IndexController;
use App\Http\Controllers\Api\V1\Posts\ShowController;
use App\Http\Controllers\Api\V1\Posts\StoreController;
use App\Http\Controllers\Api\V1\Posts\UpdateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes version 1
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('posts')->as('posts:')->group(static function () {
    Route::get('/', IndexController::class)->name('index'); // route('api:v1:posts:index')
    Route::post('/', StoreController::class)->name('store'); // route('api:v1:posts:store')
    Route::get('{post:key}', ShowController::class)->name('show'); // route('api:v1:posts:show', ['post' => $post->key])
    Route::patch('{post:key}', UpdateController::class)->name('update'); // route('api:v1:posts:update', ['post' => $post->key])
    Route::delete('{post:key}', DeleteController::class)->name('delete'); // route('api:v1:posts:delete', ['post' => $post->key])
});
