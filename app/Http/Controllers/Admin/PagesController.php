<?php

namespace App\Http\Controllers\Admin;

use App\Genre;
use App\Http\Controllers\Controller;
use App\PostType;
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
        return view('admin.pages.featured-posts');
    }

    public function featuredPostDraft()
    {
        return view('admin.pages.featured-post-draft');
    }

    public function featuredPostDeleted()
    {
        return view('admin.pages.featured-post-deleted');
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
        $genres = Genre::where('is_active', true)->with('user')->orderBy('created_at', 'DESC')->get();
        $deletedGenres = Genre::where('is_deleted', true)->with('user')->orderBy('created_at', 'DESC')->get();
        $archivedGenres = Genre::where('is_active', false)->with('user')->orderBy('created_at', 'DESC')->get();

        $genresCount = count($genres);
        $deletedCount = count($deletedGenres);
        $archivedCount = count($archivedGenres);

        return view('admin.pages.genres', compact('genres', 'genresCount', 'deletedCount', 'archivedCount'));
    }

    public function genresArchived()
    {
        return view('admin.pages.genres-archived');
    }

    public function genresDeleted()
    {
        return view('admin.pages.genres-deleted');
    }

    public function editGenre($id)
    {
        $genre = Genre::where('id', $id)->first();
        return view('admin.pages.genres-edit', compact('genre', 'id'));
    }

    public function series()
    {
        return view('admin.pages.series');
    }

    public function seriesArchived()
    {
        return view('admin.pages.series-archived');
    }

    public function seriesDeleted()
    {
        return view('admin.pages.series-deleted');
    }

    public function story()
    {
        return view('admin.pages.story');
    }

    public function addStory()
    {
        return view('admin.pages.add-story');
    }

    public function storyMedia()
    {
        return view('admin.pages.story-media');
    }

    public function storyArchived()
    {
        return view('admin.pages.story-archived');
    }

    public function storyDeleted()
    {
        return view('admin.pages.story-deleted');
    }

    public function gallery()
    {
        return view('admin.pages.gallery');
    }

    public function gallery2()
    {
        return view('admin.pages.gallery2');
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
        return view('admin.pages.users');
    }

    public function usersRestricted()
    {
        return view('admin.pages.users-restricted');
    }

    public function usersVerified()
    {
        return view('admin.pages.users-verified');
    }

    public function userDetails()
    {
        return view('admin.pages.user-details');
    }

    public function ads()
    {
        return view('admin.pages.ads');
    }

    public function settings()
    {
        return view('admin.pages.settings');
    }
}
