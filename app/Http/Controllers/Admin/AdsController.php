<?php

namespace App\Http\Controllers\Admin;

use App\Ad;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdsController extends Controller
{
    public function publishAd(Request $request)
    {
        DB::beginTransaction();

        $request->story_page_first_ad = isset($request->story_page_first_ad) ? $request->story_page_first_ad : null;
        $request->story_page_second_ad = isset($request->story_page_second_ad) ? $request->story_page_second_ad : null;
        $request->profile_page_ad = isset($request->profile_page_ad) ? $request->profile_page_ad : null;
        $request->series_page_ad = isset($request->series_page_ad) ? $request->series_page_ad : null;
        $request->shelf_page_ad = isset($request->shelf_page_ad) ? $request->shelf_page_ad : null;
        $request->playlist_page_ad = isset($request->playlist_page_ad) ? $request->playlist_page_ad : null;

        $ad = Ad::where('id', 1)->first();

        $updateAd = $ad->update($request->all());

        if ($updateAd) {
            DB::commit();
            return redirect()->back()->with('success', 'Ads Updated Successfully');
        } else {
            DB::rollback();
        }
    }
}
