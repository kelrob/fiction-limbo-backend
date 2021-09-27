<?php

namespace App\Http\Controllers\Admin;

use App\Genre;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddGenreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function addGenre(AddGenreRequest $request)
    {
        DB::beginTransaction();
        $image = $request->cover_image;
        $imageName = time()  . '.' . $image->extension();
        $image->move(public_path("/genre-images"), $imageName);
        $imageLink = config('app.url') . "genre-images/$imageName";

        $newGenre = Genre::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'cover_image' => $imageLink,
            'homepage_category' => isset($request->homepage_category) ? true : null,
            'search_page' => isset($request->search_page) ? true : null,
            'is_active' => isset($request->archive) ? true : null,
            'is_deleted' => false,
        ]);

        if ($newGenre) {
            DB::commit();
            return redirect()->to(url('genres'));
        } else {
            DB::rollback();
        }
    }

    public function updateGenre(Request $request)
    {
        DB::beginTransaction();

        $genre = Genre::where('id', $request->id)->first();
        $imageLink = $genre->cover_image;

        if (!$genre) {
            return redirect()->back();
        }

        if ($request->hasFile('cover_image')) {
            $image = $request->cover_image;
            $imageName = time()  . '.' . $image->extension();
            $image->move(public_path("/genre-images"), $imageName);
            $imageLink = config('app.url') . "genre-images/$imageName";
        }


        $genre->title = $request->title;
        $genre->cover_image = $imageLink;
        $genre->homepage_category = isset($request->homepage_category) ? true : null;
        $genre->search_page = isset($request->search_page) ? true : null;
        $updateGenre = $genre->save();

        if ($updateGenre) {
            DB::commit();
            return redirect()->back()->with('success', 'Updated Successfully');
        } else {
            DB::rollback();
        }
    }

    public function  moveToArchive($id)
    {
        DB::beginTransaction();

        $genre = Genre::where('id', $id)->first();

        if (!$genre) {
            return response()->json([
                'error' => true,
                'message' => 'Genre not found'
            ]);
        }

        $genre->is_active = false;
        if ($genre->save()) {
            DB::commit();
            return response()->json([
                'error' => false,
                'message' => 'Moved to Archive Successfully'
            ]);
        } else {
            DB::rollback();
        }
    }

    public function deleteGenre($id)
    {
        DB::beginTransaction();

        $genre = Genre::where('id', $id)->first();

        if (!$genre) {
            return response()->json([
                'error' => true,
                'message' => 'Genre not found'
            ]);
        }

        $genre->is_deleted = true;
        if ($genre->save()) {
            DB::commit();
            return response()->json([
                'error' => false,
                'message' => 'Deleted Successfully'
            ]);
        } else {
            DB::rollback();
        }
    }

    public function restoreGenre($id)
    {
        DB::beginTransaction();

        $genre = Genre::where('id', $id)->first();

        if (!$genre) {
            return response()->json([
                'error' => true,
                'message' => 'Genre not found'
            ]);
        }

        $genre->is_deleted = false;
        $genre->is_active = true;

        if ($genre->save()) {
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
