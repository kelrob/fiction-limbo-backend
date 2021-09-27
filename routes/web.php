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

// Type
Route::get('type', 'Admin\PagesController@type')->name('type');
Route::get('type-deleted', 'Admin\PagesController@typeDeleted')->name('type-deleted');
Route::post('add-type', 'Admin\TypeController@addType');
Route::post('update-type', 'Admin\TypeController@updateType');
Route::delete('delete-type', 'Admin\TypeController@deleteType');
Route::post('restore-type', 'Admin\TypeController@restoreType');

// Genres
Route::get('genres', 'Admin\PagesController@genres')->name('genres');
Route::get('genres-archived', 'Admin\PagesController@genresArchived')->name('genres-archived');
Route::get('genres-deleted', 'Admin\PagesController@genresDeleted')->name('genres-deleted');
Route::post('add-genre', 'Admin\GenreController@addGenre');
Route::get('genre/edit/{id}', 'Admin\PagesController@editGenre');
Route::post('update-genre', 'Admin\GenreController@updateGenre');
Route::get('archive-genre/{id}', 'Admin\GenreController@moveToArchive');
Route::get('delete-genre/{id}', 'Admin\GenreController@deleteGenre');
Route::get('restore-genre/{id}', 'Admin\GenreController@restoreGenre');

// Series
Route::get('all-series', 'Admin\PagesController@series')->name('series');
Route::get('series-archived', 'Admin\PagesController@seriesArchived')->name('series-archived');
Route::get('series-deleted', 'Admin\PagesController@seriesDeleted')->name('series-deleted');
Route::get('upload-series', 'Admin\PagesController@uploadSeries');
Route::post('upload-series', 'Admin\SeriesController@uploadSeries');
Route::get('edit-series/{id}', 'Admin\PagesController@editSeries');
Route::post('update-series', 'Admin\SeriesController@updateSeries');
Route::get('archive-series/{id}', 'Admin\SeriesController@moveToArchive');
Route::get('delete-series/{id}', 'Admin\SeriesController@deleteSeries');
Route::get('restore-series/{id}', 'Admin\SeriesController@restoreSeries');

// Story
Route::get('story', 'Admin\PagesController@story')->name('story');
Route::get('add-story', 'Admin\PagesController@addStory')->name('add-story');
Route::get('story-media/{id}', 'Admin\PagesController@storyMedia')->name('story-media');
Route::get('story-archived', 'Admin\PagesController@storyArchived')->name('story-archived');
Route::get('story-deleted', 'Admin\PagesController@storyDeleted')->name('story-deleted');
Route::post('process-post', 'Admin\PostController@processPost');
Route::post('upload-post-asset', 'Admin\PostController@uploadAsset');
Route::get('edit-story/{id}', 'Admin\PagesController@editStory');
Route::post('update-process-post', 'Admin\PostController@updateProcessPost');
Route::get('edit-story-media/{id}', 'Admin\PagesController@editStoryMedia');
Route::post('update-post-asset', 'Admin\PostController@updatePostAsset');
Route::get('archive-story/{id}', 'Admin\PostController@moveToArchive');
Route::get('delete-story/{id}', 'Admin\PostController@deleteStory');
Route::get('restore-story/{id}', 'Admin\PostController@restoreStory');

// Media
Route::get('gallery', 'Admin\PagesController@gallery')->name('gallery');
Route::get('gallery2/{type}/{id}', 'Admin\PagesController@gallery2')->name('gallery2');

// Backgrounds
Route::get('backgrounds', 'Admin\PagesController@backgrounds')->name('backgrounds');
Route::post('update-background-images', 'Admin\BackgroundController@updateBackground');

// Notifications
Route::get('notifications', 'Admin\PagesController@notifications')->name('notifications');
Route::get('notification-draft', 'Admin\PagesController@notificationDeleted')->name('notification-draft');
Route::get('notification-deleted', 'Admin\PagesController@notificationDeleted')->name('notification-deleted');

// Users
Route::get('users', 'Admin\PagesController@users')->name('users');
Route::get('users-restricted', 'Admin\PagesController@usersRestricted')->name('users-restricted');
Route::get('users-verified', 'Admin\PagesController@usersVerified')->name('users-verified');
Route::get('user-details', 'Admin\PagesController@userDetails')->name('user-details');

// Ads
Route::get('ads', 'Admin\PagesController@ads')->name('ads');
Route::post('publish-ad', 'Admin\AdsController@publishAd');

// Settings
Route::get('settings', 'Admin\PagesController@settings')->name('settings');
Route::post('update-settings', 'Admin\SettingsController@updateSettings');
