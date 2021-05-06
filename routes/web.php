<?php

use Illuminate\Support\Facades\Route;



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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function(){
 //   return redirect('/posts');
//});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Auth::routes();
//Route::get('/posts', [App\Http\Controllers\PostController::class, 'index']);
Route::get('/home', function(){
   return redirect('/posts');
});

//



Route::get('/delete-blank-post', [App\Http\Controllers\PostController::class, 'deleteBlank']);
Route::get('/posts-archive', [App\Http\Controllers\PostController::class, 'archive']);
Route::get('/posts/(id)/restore', [App\Http\Controllers\PostController::class, 'restore']);
Route::resource('/posts', PostController::class)
       ->missing(function (Request $request) {
           return Redirect::route('posts.index');
      });

Route::resource('/comments', CommentController::class);

