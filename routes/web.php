<?php

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

Route::resource('allposts', 'PostsController');
Route::resource('userprofile', 'UserController');

Route::get('/', function () {
    return view('welcome');
});

// get method
Route::get('/posts', 'PostsController@index')->name('posts');
// Route::get('filter/{type}/{query}', 'PostsController@filter');
Route::get('filter/{type}/{query}', [
    'uses'  => 'PostsController@filter',
    'as'    => 'filter'
]);
Route::get('/social-auth/{provider}', 'Auth\SocialController@redirectToProvider')->name('auth.social');
Route::get('/social-auth/{provider}/callback', 'Auth\SocialController@handleProviderCallback')->name('auth.social.callback');
Route::get('/profile/{user}', 'UserController@create')->name('profile');


// post method
Route::post('/posts', 'PostsController@store');
Route::post('/search', 'SearchController@filter');
Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');
Route::post('/profile/{user}', 'UserController@update')->name('profile.update');

//views
Route::view('new-post', 'new-post');

//breadcrumb
Breadcrumbs::for('All posts', function ($trail) {
    $trail->push('All posts', route('posts'));
});
Breadcrumbs::for('blog', function ($trail) {
    $trail->parent('All posts');
    $trail->push('Racial', route('filter', ['context', 'racial']) );
    $trail->push('Personal', route('filter', ['context', 'personal']) );
    $trail->push('Sexist', route('filter', ['context', 'sexist']));
    $trail->push('Social', route('filter', ['context', 'social']));
    $trail->push('Political', route('filter', ['context', 'political']));
    $trail->push('Physical', route('filter', ['physical', 'yes']));
});

Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
