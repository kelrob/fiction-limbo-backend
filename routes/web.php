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


// Authentication
Auth::routes();
Route::get('/', 'Admin\PublicController@index');

// Admin
Route::get('/dashboard', 'Admin\PagesController@dashboard')->name('dashboard');

// Featured Post
Route::get('/featured-posts', 'Admin\PagesController@featuredPosts')->name('featured-posts');
Route::get('/featured-post-draft', 'Admin\PagesController@featuredPostDraft')->name('featured-post-draft');
Route::get('/featured-post-deleted', 'Admin\PagesController@featuredPostDeleted')->name('featured-post-deleted');

// Genres
Route::get('genres', 'Admin\PagesController@genres')->name('genres');
Route::get('genres-archived', 'Admin\PagesController@genresArchived')->name('genres-archived');
Route::get('genres-deleted', 'Admin\PagesController@genresDeleted')->name('genres-deleted');

// Series
Route::get('series', 'Admin\PagesController@series')->name('series');
Route::get('series-archived', 'Admin\PagesController@seriesArchived')->name('series-archived');
Route::get('series-deleted', 'Admin\PagesController@seriesDeleted')->name('series-deleted');

// Story
Route::get('story', 'Admin\PagesController@story')->name('story');
Route::get('add-story', 'Admin\PagesController@addStory')->name('add-story');
Route::get('story-media', 'Admin\PagesController@storyMedia')->name('story-media');
Route::get('story-archived', 'Admin\PagesController@storyArchived')->name('story-archived');
Route::get('story-deleted', 'Admin\PagesController@storyDeleted')->name('story-deleted');

// Media
Route::get('gallery', 'Admin\PagesController@gallery')->name('gallery');
Route::get('gallery2', 'Admin\PagesController@gallery2')->name('gallery2');

// Backgrounds
Route::get('backgrounds', 'Admin\PagesController@backgrounds')->name('backgrounds');

// Users
Route::get('users', 'Admin\PagesController@users')->name('users');
Route::get('users-restricted', 'Admin\PagesController@usersRestricted')->name('users-restricted');
Route::get('users-verified', 'Admin\PagesController@usersVerified')->name('users-verified');
Route::get('user-details', 'Admin\PagesController@userDetails')->name('user-details');

// Ads
Route::get('ads', 'Admin\PagesController@ads')->name('ads');

// Settings
Route::get('settings', 'Admin\PagesController@settings')->name('settings');
