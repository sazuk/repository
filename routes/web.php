<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\CloudinaryController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::controller(QuestionsController::class)->middleware(['auth'])->group(function(){
    Route::get('/favorites', [QuestionsController::class, 'favorites']);
});

Route::get('/cloudinary', [CloudinaryController::class, 'cloudinary']);  //投稿フォームの表示
Route::post('/cloudinary', [CloudinaryController::class, 'cloudinary_store']);  //画像保存処理