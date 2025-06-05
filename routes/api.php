<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    UserController,
    ColorController,
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('auth')->group(function () {
    Route::post('/signup',[AuthController::class, 'signUp']);
    Route::post('/signin',[AuthController::class, 'signIn']);
});

Route::get('colors', [ColorController::class, 'index']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::prefix('users')->group(function () {
        Route::post('/',[UserController::class, 'store']);
        Route::get('/', [UserController::class, 'index']);
        Route::get('/{user}', [UserController::class, 'show']);
        Route::put('/{user}', [UserController::class, 'update']);
        Route::delete('/{user}', [UserController::class, 'destroy']);
    });
});
