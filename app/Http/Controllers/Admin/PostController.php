<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcessPostMediaRequest;
use App\Http\Requests\ProcessPostRequest;
use App\Post;
use App\PostAsset;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function processPost(ProcessPostRequest $request)
    {
        DB::beginTransaction();
        // Check username exist
        $user = User::where('username', $request->username)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'Username does not exist');
        }

        // Check title exists
        $title = Post::where('title', $request->title)->first();
        if ($title) {
            return redirect()->back()->with('error', 'Title already exist');
        }

        $newPost = Post::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'type_id' => $request->type_id,
            'series_id' => $request->series_id,
            'author_id' => $user->id,
            'genre_id' => $request->genre_id,
            'tags' => $request->tags,
            'cta_btn_text' => $request->cta_btn_text,
            'cta_btn_link' => $request->cta_btn_link,
            'post' => $request->post
        ]);

        if ($newPost) {
            DB::commit();
            return redirect()->to(url('story-media/' . $newPost->id));
        } else {
            DB::rollback();
        }
    }

    public function uploadAsset(ProcessPostMediaRequest $request)
    {
        DB::beginTransaction();

        // Title Art
        if ($request->hasFile('title_art')) {
            $titleArt = $request->title_art;
            $titleArtName = time()  . '.' . $titleArt->extension();
            $titleArt->move(public_path("/posts-assets/title-art"), $titleArtName);
            $titleArtLink = config('app.url') . "posts-assets/title-art/$titleArtName";
        }

        // Hero Image
        if ($request->hasFile('hero_image')) {
            $heroImage = $request->hero_image;
            $heroImageName = time()  . '.' . $heroImage->extension();
            $heroImage->move(public_path("/post-assets/hero-image"), $heroImageName);
            $heroImageLink = config('app.url') . "post-assets/hero-image/$heroImageName";
        }

        // Hero Video
        if ($request->hasFile('hero_video')) {
            $heroVideo = $request->hero_video;
            $heroVideoName = time()  . '.' . $heroVideo->extension();
            $heroVideo->move(public_path("/post-assets/hero-video"), $heroVideoName);
            $heroVideoLink = config('app.url') . "post-assets/hero-video/$heroVideoName";
        }

        // Audio
        if ($request->hasFile('audio')) {
            $audio = $request->audio;
            $audioName = time()  . '.' . $audio->extension();
            $audio->move(public_path("/post-assets/audio"), $audioName);
            $audioLink = config('app.url') . "post-assets/hero-audio/$audioName";
        }

        // Background Image
        if ($request->hasFile('background_image')) {
            $backgroundImage = $request->background_image;
            $backgroundImageName = time()  . '.' . $backgroundImage->extension();
            $backgroundImage->move(public_path("/post-assets/background-images"), $backgroundImageName);
            $backgroundImageLink = config('app.url') . "post-assets/background-images/$backgroundImageName";
        }

        $newPostAsset = PostAsset::create([
            'post_id' => $request->post_id,
            'title_art' => $titleArtLink,
            'hero_image' => $heroImageLink,
            'hero_video' => $heroVideoLink,
            'audio' => $audioLink,
            'background_image' => $backgroundImageLink,
            'image_credits' => $request->image_credits,
            'description' => $request->description,
            'credits' => $request->credits
        ]);

        if ($newPostAsset) {
            DB::commit();
            return redirect()->to(url('story'));
        } else {
            DB::rollback();
        }
    }

    public function updateProcessPost(ProcessPostRequest $request)
    {
        DB::beginTransaction();
        // Check username exist
        $user = User::where('username', $request->username)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'Username does not exist');
        }

        // Check Post exists
        $post = Post::where('id', $request->post_id)->first();
        if (!$post) {
            return redirect()->back()->with('error', 'Post does not exist');
        }


        $updatePost = $post->update([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'type_id' => $request->type_id,
            'series_id' => $request->series_id,
            'author_id' => $user->id,
            'genre_id' => $request->genre_id,
            'tags' => $request->tags,
            'cta_btn_text' => $request->cta_btn_text,
            'cta_btn_link' => $request->cta_btn_link,
            'post' => $request->post
        ]);

        if ($updatePost) {
            DB::commit();
            return redirect()->to(url('edit-story-media/' . $post->id));
        } else {
            DB::rollback();
        }
    }

    public function updatePostAsset(Request $request)
    {
        DB::beginTransaction();
        $asset = PostAsset::where('post_id', $request->post_id)->first();

        $titleArtLink = $asset->title_art;
        $heroImageLink = $asset->hero_image;
        $heroVideoLink = $asset->hero_video;
        $audioLink = $asset->audio;
        $backgroundImageLink = $asset->background_image;

        // Title Art
        if ($request->hasFile('title_art')) {
            $titleArt = $request->title_art;
            $titleArtName = time()  . '.' . $titleArt->extension();
            $titleArt->move(public_path("/posts-assets/title-art"), $titleArtName);
            $titleArtLink = config('app.url') . "posts-assets/title-art/$titleArtName";
        }

        // Hero Image
        if ($request->hasFile('hero_image')) {
            $heroImage = $request->hero_image;
            $heroImageName = time()  . '.' . $heroImage->extension();
            $heroImage->move(public_path("/post-assets/hero-image"), $heroImageName);
            $heroImageLink = config('app.url') . "post-assets/hero-image/$heroImageName";
        }

        // Hero Video
        if ($request->hasFile('hero_video')) {
            $heroVideo = $request->hero_video;
            $heroVideoName = time()  . '.' . $heroVideo->extension();
            $heroVideo->move(public_path("/post-assets/hero-video"), $heroVideoName);
            $heroVideoLink = config('app.url') . "post-assets/hero-video/$heroVideoName";
        }

        // Audio
        if ($request->hasFile('audio')) {
            $audio = $request->audio;
            $audioName = time()  . '.' . $audio->extension();
            $audio->move(public_path("/post-assets/audio"), $audioName);
            $audioLink = config('app.url') . "post-assets/hero-audio/$audioName";
        }

        // Background Image
        if ($request->hasFile('background_image')) {
            $backgroundImage = $request->background_image;
            $backgroundImageName = time()  . '.' . $backgroundImage->extension();
            $backgroundImage->move(public_path("/post-assets/background-images"), $backgroundImageName);
            $backgroundImageLink = config('app.url') . "post-assets/background-images/$backgroundImageName";
        }

        $updateAsset = $asset->update([
            'title_art' => $titleArtLink,
            'hero_image' => $heroImageLink,
            'hero_video' => $heroVideoLink,
            'audio' => $audioLink,
            'background_image' => $backgroundImageLink,
            'image_credits' => $request->image_credits,
            'description' => $request->description,
            'credits' => $request->credits
        ]);

        if ($updateAsset) {
            DB::commit();
            return redirect()->to(url('story'));
        } else {
            DB::rollback();
        }
    }

    public function moveToArchive($id)
    {
        DB::beginTransaction();

        $story = Post::where('id', $id)->first();

        if (!$story) {
            return response()->json([
                'error' => true,
                'message' => 'Genre not found'
            ]);
        }

        $story->is_active = false;
        if ($story->save()) {
            DB::commit();
            return response()->json([
                'error' => false,
                'message' => 'Moved to Archive Successfully'
            ]);
        } else {
            DB::rollback();
        }
    }

    public function deleteStory($id)
    {
        DB::beginTransaction();

        $story = Post::where('id', $id)->first();

        if (!$story) {
            return response()->json([
                'error' => true,
                'message' => 'Story not found'
            ]);
        }

        $story->is_deleted = true;
        if ($story->save()) {
            DB::commit();
            return response()->json([
                'error' => false,
                'message' => 'Deleted Successfully'
            ]);
        } else {
            DB::rollback();
        }
    }

    public function restoreStory($id)
    {
        DB::beginTransaction();

        $story = Post::where('id', $id)->first();

        if (!$story) {
            return response()->json([
                'error' => true,
                'message' => 'Story found'
            ]);
        }

        $story->is_deleted = false;
        $story->is_active = true;

        if ($story->save()) {
            DB::commit();
            return response()->json([
                'error' => false,
                'message' => 'Restored Successfully'
            ]);
        } else {
            DB::rollback();
        }
    }
}
