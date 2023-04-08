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

Route::get('/', function () {
    return view('welcome');
});

//لنستدعي الدالة لعملناها بالPostsController
//بنعرضهم بالرابط هاد
Route::get('admin/posts','App\Http\Controllers\Admin\PostsController@index');

Route::get('admin/post/crate','App\Http\Controllers\Admin\PostsController@crate');

Route::post('admin/posts/store','App\Http\Controllers\Admin\PostsController@store');

Route::get('admin/users','App\Http\Controllers\Admin\UsersController@index');




//عشان نشغل صفحة الويب
//php artisan serve
