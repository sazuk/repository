<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionsController;  //外部にあるPostControllerクラスをインポート。

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

Route::get('/', [QuestionsController::class, 'index']);
Route::get('/questions', [QuestionsController::class, 'questions']);
Route::get('/announces', [QuestionsController::class, 'announces']);