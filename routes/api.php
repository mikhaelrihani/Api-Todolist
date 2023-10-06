<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Ci dessous je créer une route en methode get pour afficher la liste de toutes mes tasks
// Je créer la route /api/tasks qui va implementer la methode list() de mon controller TaskController
Route::get('/tasks', [TaskController::class, 'list']);

// Ci dessous je créer une route pour /api/tasks/{id}. {id} est un parametre pour ma route et je vais pouvoir le recuperer dans ma methode show() depuis mon TaskController
Route::get('/tasks/{id}', [TaskController::class, 'show']);

Route::post('/tasks', [TaskController::class, 'create']);

Route::put('/tasks/{id}', [TaskController::class, 'update']);

Route::delete('/tasks/{id}', [TaskController::class, 'delete']);
