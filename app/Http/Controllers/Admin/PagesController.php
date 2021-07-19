<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
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

    public function genres()
    {
        return view('admin.pages.genres');
    }

    public function genresArchived()
    {
        return view('admin.pages.genres-archived');
    }

    public function genresDeleted()
    {
        return view('admin.pages.genres-deleted');
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
