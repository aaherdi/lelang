<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landing()
    {
        return view('pages.landing', [
            'title'=>'Pojok Lelang | Home'
        ]);
    }

    public function profile()
    {
        return view('pages.profile-new')->with([
            'title'=>'Pojok Lelang | Your Profile'
        ]);
    }

    public function about()
    {
        return view('pages.about-new', [
            'title'=>'Pojok lelang | About'
        ]);
    }

    public function error()
    {
        return view('pages.error-page', [
            'title' => 'Error'
        ]);
    }

    public function error_login()
    {
        return view('pages.error-login', [
            'title' => 'Error'
        ]);
    }
}