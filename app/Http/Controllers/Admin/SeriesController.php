<?php

namespace App\Http\Controllers\Admin;

use App\Genre;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSeriesRequest;
use App\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function uploadSeries(CreateSeriesRequest $request)
    {
        DB::beginTransaction();
        // Check if genre exists
        $genre = Genre::where('id', $request->genre_id)->first();

        if (!$genre) {
            return redirect()->back()->with('error', 'This Genre does not exist');
        }


        // Header Image
        $headerImage = $request->header_image;
        $headerImageName = time()  . '.' . $headerImage->extension();
        $headerImage->move(public_path("/series/header-images"), $headerImageName);
        $headerImageLink = config('app.url') . "series/header-images/$headerImageName";

        // Background Image
        $backgroundImage = $request->background_image;
        $backgroundImageName = time()  . '.' . $backgroundImage->extension();
        $backgroundImage->move(public_path("/series/background-images"), $backgroundImageName);
        $backgroundImageLink = config('app.url') . "series/background-images/$backgroundImageName";

        $newSeries = Series::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'genre_id' => $request->genre_id,
            'header_image' => $headerImageLink,
            'background_image' => $backgroundImageLink,
            'description' => $request->description
        ]);

        if ($newSeries) {
            DB::commit();
            return redirect()->to(url('all-series'));
        } else {
            DB::rollback();
        }
    }

    public function updateSeries(Request $request)
    {
        DB::beginTransaction();

        $series = Series::where('id', $request->series_id)->first();
        $headerImageLink = $series->header_image;
        $backgroundImageLink = $series->background_image;

        if (!$series) {
            return redirect()->back();
        }

        if ($request->hasFile('header_image')) {
            $headerImage = $request->header_image;
            $headerImageName = time()  . '.' . $headerImage->extension();
            $headerImage->move(public_path("/series/header-images"), $headerImageName);
            $headerImageLink = config('app.url') . "series/header-images/$headerImageName";
        }

        if ($request->hasFile('background_image')) {
            $backgroundImage = $request->background_image;
            $backgroundImageName = time()  . '.' . $backgroundImage->extension();
            $backgroundImage->move(public_path("/series/background-images"), $backgroundImageName);
            $backgroundImageLink = config('app.url') . "series/background-images/$backgroundImageName";
        }

        $series->title = $request->title;
        $series->genre_id = $request->genre_id;
        $series->header_image = $headerImageLink;
        $series->background_image = $backgroundImageLink;
        $series->description = $request->description;
        $updateSeries = $series->save();

        if ($updateSeries) {
            DB::commit();
            return redirect()->back()->with('success', 'Updated Successfully');
        } else {
            DB::rollback();
        }
    }

    public function  moveToArchive($id)
    {
        DB::beginTransaction();

        $series = Series::where('id', $id)->first();

        if (!$series) {
            return response()->json([
                'error' => true,
                'message' => 'Genre not found'
            ]);
        }

        $series->is_active = false;
        if ($series->save()) {
            DB::commit();
            return response()->json([
                'error' => false,
                'message' => 'Moved to Archive Successfully'
            ]);
        } else {
            DB::rollback();
        }
    }

    public function deleteSeries($id)
    {
        DB::beginTransaction();

        $series = Series::where('id', $id)->first();

        if (!$series) {
            return response()->json([
                'error' => true,
                'message' => 'Series not found'
            ]);
        }

        $series->is_deleted = true;
        if ($series->save()) {
            DB::commit();
            return response()->json([
                'error' => false,
                'message' => 'Deleted Successfully'
            ]);
        } else {
            DB::rollback();
        }
    }

    public function restoreSeries($id)
    {
        DB::beginTransaction();

        $series = Series::where('id', $id)->first();

        if (!$series) {
            return response()->json([
                'error' => true,
                'message' => 'Series not found'
            ]);
        }

        $series->is_deleted = false;
        $series->is_active = true;

        if ($series->save()) {
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
