<?php

namespace App\Http\Controllers\Admin;

use App\Ad;
use App\Genre;
use App\Http\Controllers\Controller;
use App\Post;
use App\PostAsset;
use App\PostType;
use App\Series;
use App\Setting;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }

    public function featuredPosts()
    {
        $featuredPosts = Post::where('is_active', true)->where('is_featured', true)->where('is_deleted', '!=', true)->with('type')->orderBy('created_at', 'DESC')->get();
        $featuredPostDraft = Post::where('is_active', false)->where('is_featured', true)->where('is_deleted', '!=', true)->with('type')->orderBy('created_at', 'DESC')->get();
        $featuredPostDeleted = Post::where('is_featured', true)->where('is_deleted', true)->with('type')->orderBy('created_at', 'DESC')->get();

        $featuredPostCount = count($featuredPosts);
        $featuredPostDraftCount = count($featuredPostDraft);
        $featuredPostDeletedCount = count($featuredPostDeleted);

        return view('admin.pages.featured-posts', compact('featuredPosts', 'featuredPostCount', 'featuredPostDraftCount', 'featuredPostDeletedCount'));
    }

    public function featuredPostDraft()
    {
        $featuredPosts = Post::where('is_active', true)->where('is_featured', true)->where('is_deleted', '!=', true)->with('type')->orderBy('created_at', 'DESC')->get();
        $featuredPostDraft = Post::where('is_active', false)->where('is_featured', true)->where('is_deleted', '!=', true)->with('type')->orderBy('created_at', 'DESC')->get();
        $featuredPostDeleted = Post::where('is_featured', true)->where('is_deleted', true)->with('type')->orderBy('created_at', 'DESC')->get();

        $featuredPostCount = count($featuredPosts);
        $featuredPostDraftCount = count($featuredPostDraft);
        $featuredPostDeletedCount = count($featuredPostDeleted);

        return view('admin.pages.featured-post-draft', compact('featuredPostDraft', 'featuredPostCount', 'featuredPostDraftCount', 'featuredPostDeletedCount'));
    }

    public function featuredPostDeleted()
    {
        $featuredPosts = Post::where('is_active', true)->where('is_featured', true)->where('is_deleted', '!=', true)->with('type')->orderBy('created_at', 'DESC')->get();
        $featuredPostDraft = Post::where('is_active', false)->where('is_featured', true)->where('is_deleted', '!=', true)->with('type')->orderBy('created_at', 'DESC')->get();
        $featuredPostDeleted = Post::where('is_featured', true)->where('is_deleted', true)->with('type')->orderBy('created_at', 'DESC')->get();

        $featuredPostCount = count($featuredPosts);
        $featuredPostDraftCount = count($featuredPostDraft);
        $featuredPostDeletedCount = count($featuredPostDeleted);

        return view('admin.pages.featured-post-deleted', compact('featuredPostDeleted', 'featuredPostCount', 'featuredPostDraftCount', 'featuredPostDeletedCount'));
    }

    public function type()
    {
        $types = PostType::where('is_deleted', false)->with('user')->orderBy('created_at', 'DESC')->get();
        $deletedTypes = PostType::where('is_deleted', true)->with('user')->orderBy('created_at', 'DESC')->get();
        $typesCount = count($types);
        $deletedCount = count($deletedTypes);
        return view('admin.pages.type', compact('types', 'typesCount', 'deletedCount'));
    }

    public function typeDeleted()
    {
        $types = PostType::where('is_deleted', false)->with('user')->orderBy('created_at', 'DESC')->get();
        $deletedTypes = PostType::where('is_deleted', true)->with('user')->orderBy('created_at', 'DESC')->get();
        $typesCount = count($types);
        $deletedCount = count($deletedTypes);
        return view('admin.pages.type-deleted', compact('deletedTypes', 'typesCount', 'deletedCount'));
    }

    public function genres()
    {
        $genres = Genre::where('is_active', true)->where('is_deleted', '!=',)->with('user')->orderBy('created_at', 'DESC')->get();
        $deletedGenres = Genre::where('is_deleted', true)->with('user')->orderBy('created_at', 'DESC')->get();
        $archivedGenres = Genre::where('is_active', false)->where('is_deleted', '!=', true)->with('user')->orderBy('created_at', 'DESC')->get();

        $genresCount = count($genres);
        $deletedCount = count($deletedGenres);
        $archivedCount = count($archivedGenres);

        return view('admin.pages.genres', compact('genres', 'genresCount', 'deletedCount', 'archivedCount'));
    }

    public function genresArchived()
    {
        $genres = Genre::where('is_active', true)->where('is_deleted', '!=', true)->with('user')->orderBy('created_at', 'DESC')->get();
        $deletedGenres = Genre::where('is_deleted', true)->with('user')->orderBy('created_at', 'DESC')->get();
        $archivedGenres = Genre::where('is_active', false)->where('is_deleted', '!=', true)->with('user')->orderBy('created_at', 'DESC')->get();

        $genresCount = count($genres);
        $deletedCount = count($deletedGenres);
        $archivedCount = count($archivedGenres);

        return view('admin.pages.genres-archived', compact('archivedGenres', 'genresCount', 'deletedCount', 'archivedCount'));
    }

    public function genresDeleted()
    {
        $genres = Genre::where('is_active', true)->where('is_deleted', '!=', true)->with('user')->orderBy('created_at', 'DESC')->get();
        $deletedGenres = Genre::where('is_deleted', true)->with('user')->orderBy('created_at', 'DESC')->get();
        $archivedGenres = Genre::where('is_active', false)->where('is_deleted', '!=', true)->with('user')->orderBy('created_at', 'DESC')->get();

        $genresCount = count($genres);
        $deletedCount = count($deletedGenres);
        $archivedCount = count($archivedGenres);

        return view('admin.pages.genres-deleted', compact('deletedGenres', 'genresCount', 'deletedCount', 'archivedCount'));
    }

    public function editGenre($id)
    {
        $genre = Genre::where('id', $id)->first();
        return view('admin.pages.genres-edit', compact('genre', 'id'));
    }

    public function series()
    {
        $series = Series::where('is_active', true)->where('is_deleted', '!=', true)->with('user')->orderBy('created_at', 'DESC')->get();
        $deletedSeries = Series::where('is_deleted', true)->with('user')->orderBy('created_at', 'DESC')->get();
        $archivedSeries = Series::where('is_active', false)->where('is_deleted', '!=', true)->with('user')->orderBy('created_at', 'DESC')->get();

        $seriesCount = count($series);
        $deletedCount = count($deletedSeries);
        $archivedCount = count($archivedSeries);
        return view('admin.pages.series', compact('series', 'seriesCount', 'deletedCount', 'archivedCount'));
    }

    public function seriesArchived()
    {
        $series = Series::where('is_active', true)->where('is_deleted', '!=', true)->with('user')->orderBy('created_at', 'DESC')->get();
        $deletedSeries = Series::where('is_deleted', true)->with('user')->orderBy('created_at', 'DESC')->get();
        $archivedSeries = Series::where('is_active', false)->where('is_deleted', '!=', true)->with('user')->orderBy('created_at', 'DESC')->get();

        $seriesCount = count($series);
        $deletedCount = count($deletedSeries);
        $archivedCount = count($archivedSeries);
        return view('admin.pages.series-archived', compact('archivedSeries', 'seriesCount', 'deletedCount', 'archivedCount'));
    }

    public function seriesDeleted()
    {
        $series = Series::where('is_active', true)->where('is_deleted', '!=', true)->with('user')->orderBy('created_at', 'DESC')->get();
        $deletedSeries = Series::where('is_deleted', true)->with('user')->orderBy('created_at', 'DESC')->get();
        $archivedSeries = Series::where('is_active', false)->where('is_deleted', '!=', true)->with('user')->orderBy('created_at', 'DESC')->get();

        $seriesCount = count($series);
        $deletedCount = count($deletedSeries);
        $archivedCount = count($archivedSeries);
        return view('admin.pages.series-deleted', compact('deletedSeries', 'seriesCount', 'deletedCount', 'archivedCount'));
    }

    public function uploadSeries()
    {
        $genres = Genre::where('is_active', true)->where('is_deleted', '!=', true)->with('user')->orderBy('created_at', 'DESC')->get();
        return view('admin.pages.upload-series', compact('genres'));
    }

    public function editSeries($id)
    {
        $genres = Genre::where('is_active', true)->where('is_deleted', '!=', true)->with('user')->orderBy('created_at', 'DESC')->get();
        $series = Series::where('id', $id)->first();
        return view('admin.pages.edit-series', compact('series', 'genres'));
    }

    public function story()
    {
        $stories = Post::where('is_active', true)->where('is_deleted', '!=', true)->orderBy('created_at', 'DESC')->get();
        $deletedStories = Post::where('is_deleted', true)->orderBy('created_at', 'DESC')->get();
        $archivedStories = Post::where('is_active', false)->where('is_deleted', '!=', true)->orderBy('created_at', 'DESC')->get();

        $storiesCount = count($stories);
        $deletedCount = count($deletedStories);
        $archivedCount = count($archivedStories);

        return view('admin.pages.story', compact('stories', 'storiesCount', 'deletedCount', 'archivedCount'));
    }

    public function addStory()
    {
        $types = PostType::where('is_deleted', false)->orderBy('created_at', 'DESC')->get();
        $series = Series::where('is_active', true)->where('is_deleted', '!=', true)->orderBy('created_at', 'DESC')->get();
        $genres = Genre::where('is_active', true)->where('is_deleted', '!=',)->orderBy('created_at', 'DESC')->get();

        return view('admin.pages.add-story', compact('types', 'series', 'genres'));
    }

    public function editStory($id)
    {
        $types = PostType::where('is_deleted', false)->orderBy('created_at', 'DESC')->get();
        $series = Series::where('is_active', true)->where('is_deleted', '!=', true)->orderBy('created_at', 'DESC')->get();
        $genres = Genre::where('is_active', true)->where('is_deleted', '!=',)->orderBy('created_at', 'DESC')->get();
        $story = Post::where('id', $id)->with('type', 'series', 'user', 'genre')->first();

        return view('admin.pages.edit-story', compact('story', 'series', 'genres', 'types'));
    }

    public function storyMedia($id)
    {
        return view('admin.pages.story-media', compact('id'));
    }

    public function editStoryMedia($id)
    {
        $asset = PostAsset::where('post_id', $id)->first();
        return view('admin.pages.edit-story-media', compact('id', 'asset'));
    }

    public function storyArchived()
    {

        $stories = Post::where('is_active', true)->where('is_deleted', '!=', true)->orderBy('created_at', 'DESC')->get();
        $deletedStories = Post::where('is_deleted', true)->orderBy('created_at', 'DESC')->get();
        $archivedStories = Post::where('is_active', false)->where('is_deleted', '!=', true)->orderBy('created_at', 'DESC')->get();

        $storiesCount = count($stories);
        $deletedCount = count($deletedStories);
        $archivedCount = count($archivedStories);

        return view('admin.pages.story-archived', compact('archivedStories', 'storiesCount', 'deletedCount', 'archivedCount'));
    }

    public function storyDeleted()
    {
        $stories = Post::where('is_active', true)->where('is_deleted', '!=', true)->orderBy('created_at', 'DESC')->get();
        $deletedStories = Post::where('is_deleted', true)->orderBy('created_at', 'DESC')->get();
        $archivedStories = Post::where('is_active', false)->where('is_deleted', '!=', true)->orderBy('created_at', 'DESC')->get();

        $storiesCount = count($stories);
        $deletedCount = count($deletedStories);
        $archivedCount = count($archivedStories);

        return view('admin.pages.story-deleted', compact('deletedStories', 'storiesCount', 'deletedCount', 'archivedCount'));
    }

    public function gallery()
    {
        $postAssets = PostAsset::orderBy('id', 'DESC')->get();
        $genres = Genre::orderBy('id', 'Desc')->get();
        $series = Series::orderBy('id', 'Desc')->get();

        return view('admin.pages.gallery', compact('postAssets', 'genres', 'series'));
    }

    public function gallery2($type, $id)
    {
        if ($type == 'post-asset') {
            $details = PostAsset::where('post_id', $id)->with('post')->with('post.user')->first();
        }

        if ($type == 'series') {
            $details = Series::where('id', $id)->with('user')->first();
        }

        if ($type == 'genres') {
            $details = Genre::where('id', $id)->with('user')->first();
        }

        return view('admin.pages.gallery2', compact('details'));
    }

    public function backgrounds()
    {
        return view('admin.pages.backgrounds');
    }

    public function notifications()
    {
        return view('admin.pages.notifications');
    }

    public function notificationDraft()
    {
        return view('admin.pages.notification-draft');
    }

    public function notificationDeleted()
    {
        return view('admin.pages.notifications');
    }

    public function users()
    {
        $users = User::orderBy('id', 'DESC')->get();
        $verifiedUsers = User::where('is_verified', true)->orderBy('id', 'DESC')->get();
        $restrictedUsers = User::where('is_restricted', true)->orderBy('id', 'DESC')->get();

        $usersCount = count($users);
        $verifiedUsersCount = count($verifiedUsers);
        $restrictedUsersCount = count($restrictedUsers);
        return view('admin.pages.users', compact('users', 'usersCount', 'verifiedUsersCount', 'restrictedUsersCount'));
    }

    public function usersRestricted()
    {

        $users = User::orderBy('id', 'DESC')->get();
        $verifiedUsers = User::where('is_verified', true)->orderBy('id', 'DESC')->get();
        $restrictedUsers = User::where('is_restricted', true)->orderBy('id', 'DESC')->get();

        $usersCount = count($users);
        $verifiedUsersCount = count($verifiedUsers);
        $restrictedUsersCount = count($restrictedUsers);

        return view('admin.pages.users-restricted', compact('restrictedUsers', 'usersCount', 'verifiedUsersCount', 'restrictedUsersCount'));
    }

    public function usersVerified()
    {
        $users = User::orderBy('id', 'DESC')->get();
        $verifiedUsers = User::where('is_verified', true)->orderBy('id', 'DESC')->get();
        $restrictedUsers = User::where('is_restricted', true)->orderBy('id', 'DESC')->get();

        $usersCount = count($users);
        $verifiedUsersCount = count($verifiedUsers);
        $restrictedUsersCount = count($restrictedUsers);

        return view('admin.pages.users-verified', compact('verifiedUsers', 'usersCount', 'verifiedUsersCount', 'restrictedUsersCount'));
    }

    public function userDetails()
    {
        return view('admin.pages.user-details');
    }

    public function ads()
    {
        $ad = Ad::where('id', 1)->first();
        return view('admin.pages.ads', compact('ad'));
    }

    public function settings()
    {
        $setting = Setting::where('id', 1)->first();
        return view('admin.pages.settings', compact('setting'));
    }
}
