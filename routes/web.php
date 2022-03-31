<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PostController;
use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/courses', [CourseController::class, 'course'])->name('course');
Route::get('/courses/{courses}', [CourseController::class, 'single'])->name('single');
Route::get('/courses/{courses}/{lessons}', [CourseController::class, 'lesson'])->name('lesson');

//Route::get('/test_add_course', function () {
//    $courses = Course::create([
//        'title' => 'Теория ООП на практике C#',
//        'subtitle' => 'Демонстрация преимуществ Объектно-Ориентированного подхода на примере рефакторинга программы'
//    ]);
//});
//Route::get('/test_add_post', function () {
//    $post = Post::create([
//        'title' => 'test',
//        'body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
//        'user_id' => 1,
//        'excerpt' => '',
////    'image' => 'img/img-news-1.jpg'
//    ]);
//});
Route::get('/test_add_user', function () {
    $user = User::create([
        'title' => 'test',
        'body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
        'user_id' => 1,
        'excerpt' => '',
//    'image' => 'img/img-news-1.jpg'
    ]);
});



