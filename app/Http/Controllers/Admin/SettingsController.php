<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function updateSettings(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();

        DB::beginTransaction();
        if (isset($request->new_password) && isset($request->confirm_password)) {

            if ($request->new_password != $request->confirm_password) {
                return redirect()->back()->with('error', 'Password does not match');
            }

            $password = Hash::make($request->new_password);
            $user->password = $password;
            $user->save();
        }

        if ($request->spam_control) {
            $setting = Setting::where('id', 1)->first();
            $setting->spam_control = $request->spam_control;
            $setting->save();
        }

        DB::commit();
        return redirect()->back()->with('success', 'Settings Updated Successfully');
    }
}
