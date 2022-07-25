<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Categories;
use App\Http\Controllers\BlogController;
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

require __DIR__.'/auth.php';
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', [BlogController::class, 'list']);

Route::get('/add-blog', function () {
    return view('add-blog');
})->middleware('auth','types');

Route::post('/add-blog', function () {
    $blog = new Blog();
    $blog->title = request('title');

    $turkish = array("ı", "ğ", "ü", "ş", "ö", "ç", " ");//turkish letters
    $english   = array("i", "g", "u", "s", "o", "c", "-");//english cooridinators letters
    $link = strtolower(str_replace($turkish, $english, $blog->title));//replace php function

    $blog->link = $link;
    $blog->category = implode(',' ,request('test'));
    $blog->content = request('content');
    $blog->thumb_path = request('thumb_path');
    $blog->banner_path = request('banner_path');
    $blog->save();
    return redirect("/add-blog");
})->middleware('auth','types');

Route::get('/add-category', function () {
    return view('add-category');
})->middleware('auth','types');

Route::post('/add-category', function () {
    $category = new Categories();
    $category->name = request('category_name');
    $category->save();
    return redirect("/add-category");
})->middleware(['auth']);

Route::get('/all-blog', function () {
    return view('all-blog', ['blogs'=>Blog::all()]);
})->middleware('auth','types');

Route::get('/edit-blog/{blog}', function (Blog $blog) {
    return view('edit-blog', ['blog'=>Blog::all()->find($blog)]);
})->middleware('auth','types');

Route::post('/edit-blog/{blog}', function ($blog) {
    $blog = Blog::find($blog);
    $blog->title = request('title');

    $turkish = array("ı", "ğ", "ü", "ş", "ö", "ç", " ");//turkish letters
    $english   = array("i", "g", "u", "s", "o", "c", "-");//english cooridinators letters
    $link = strtolower(str_replace($turkish, $english, $blog->title));//replace php function

    $blog->link = $link;
    $blog->category = implode(',' ,request('test'));
    $blog->content = request('content');
    $blog->thumb_path = request('thumb_path');
    $blog->banner_path = request('banner_path');
    $blog->save();
    return view('edit-blog', ['blog'=>Blog::all()->find($blog)]);
})->middleware('auth','types');

Route::get('/delete-blog/{blog}', function ($blog) {
    $blog = Blog::find($blog);
    $blog->delete();
    return redirect("/all-blog");
})->middleware('auth','types');

Route::get('{category}/{blog}', function ($category, $blog){
    return view('single-blog', ['blog'=>Blog::where('link', '=', $blog)->firstOrFail()]);
});

Route::get('{category}', function ($category){
    return view('single-category', ['blogs'=>Blog::where('category', 'like', '%'.$category.'%')->get()]);
});