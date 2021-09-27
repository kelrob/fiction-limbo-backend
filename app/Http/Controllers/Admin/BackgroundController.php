<?php

namespace App\Http\Controllers\Admin;

use App\Background;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackgroundController extends Controller
{
    public function updateBackground(Request $request)
    {
        DB::beginTransaction();
        $background = Background::where('id', 1)->first();

        $profileHeaderLink = null;
        if ($request->hasFile('profile_header')) {
            $profileHeader = $request->profile_header;
            $profileHeaderName = time()  . '.' . $profileHeader->extension();
            $profileHeader->move(public_path("/background"), $profileHeaderName);
            $profileHeaderLink = config('app.url') . "background/$profileHeaderName";
        }

        $loadingPageLink = null;
        if ($request->hasFile('loading_page')) {
            $loadingPage = $request->loading_page;
            $loadingPageName = time()  . '.' . $loadingPage->extension();
            $loadingPage->move(public_path("/background"), $loadingPageName);
            $loadingPageLink = config('app.url') . "background/$loadingPageName";
        }

        $seriesPageLink = null;
        if ($request->hasFile('series_episode_page')) {
            $seriesPage = $request->series_episode_page;
            $seriesPageName = time()  . '.' . $seriesPage->extension();
            $seriesPage->move(public_path("/background"), $seriesPageName);
            $seriesPageLink = config('app.url') . "background/$seriesPageName";
        }

        $loginPageLink = null;
        if ($request->hasFile('login_page')) {
            $loginPage = $request->login_page;
            $loginPageName = time()  . '.' . $loginPage->extension();
            $loginPage->move(public_path("/background"), $loginPageName);
            $loginPageLink = config('app.url') . "background/$loginPageName";
        }

        $signupPageLink = null;
        if ($request->hasFile('signup_page')) {
            $signupPage = $request->signup_page;
            $signupPageName = time()  . '.' . $signupPage->extension();
            $signupPage->move(public_path("/background"), $signupPageName);
            $signupPageLink = config('app.url') . "background/$signupPageName";
        }

        $passwordPageLink = null;
        if ($request->hasFile('password_page')) {
            $passwordPage = $request->password_page;
            $passwordPageName = time()  . '.' . $passwordPage->extension();
            $passwordPage->move(public_path("/background"), $passwordPageName);
            $passwordPageLink = config('app.url') . "background/$passwordPageName";
        }

        $resolutionPageLink = null;
        if ($request->hasFile('resolution_page')) {
            $resolutionPage = $request->resolution_page;
            $resolutionPageName = time()  . '.' . $resolutionPage->extension();
            $resolutionPage->move(public_path("/background"), $resolutionPageName);
            $resolutionPageLink = config('app.url') . "background/$resolutionPageName";
        }

        $contactUsPageLink = null;
        if ($request->hasFile('contact_us_page')) {
            $contactUsPage = $request->contact_us_page;
            $contactUsPageName = time()  . '.' . $resolutionPage->extension();
            $contactUsPage->move(public_path("/background"), $contactUsPageName);
            $contactUsPageLink = config('app.url') . "background/$contactUsPageName";
        }

        $policyPageLink = null;
        if ($request->hasFile('policy_page')) {
            $policyPage = $request->policy_page;
            $policyPageName = time()  . '.' . $policyPage->extension();
            $policyPage->move(public_path("/background"), $policyPageName);
            $policyPageLink = config('app.url') . "background/$policyPageName";
        }

        $termsOfUseLink = null;
        if ($request->hasFile('terms_of_use')) {
            $termsOfUse = $request->terms_of_use;
            $termsOfUseName = time()  . '.' . $termsOfUse->extension();
            $termsOfUse->move(public_path("/background"), $termsOfUseName);
            $termsOfUseLink = config('app.url') . "background/$termsOfUseName";
        }

        $updateBackground = $background->update([
            'profile_header' => $profileHeaderLink,
            'loading_page' => $loadingPageLink,
            'series_episode_page' => $seriesPageLink,
            'login_page' => $loginPageLink,
            'signup_page' => $signupPageLink,
            'password_page' => $passwordPageLink,
            'resolution_page' => $resolutionPageLink,
            'contact_us_page' => $contactUsPageLink,
            'policy_page' => $policyPageLink,
            'terms_of_use' => $termsOfUseLink,
        ]);

        if ($updateBackground) {
            DB::commit();
            return redirect()->back()->with('success', 'Background Updated Successfully');
        } else {
            DB::rollback();
        }
    }
}
