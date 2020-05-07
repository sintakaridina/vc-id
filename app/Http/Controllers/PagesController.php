<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to SEENAU!';
        return view('pages.index')->with('title', $title);
    }
    public function SignUpDeprecated()
    {
        $title = 'Sign Up';
        return view('pages.signup-deprecated')->with('title', $title);
    }

    public function loginDeprecated()
    {
        $title = 'Login';
        return view('pages.login-deprecated')->with('title', $title);
    }

    public function preview()
    {
        $title = 'Preview';
        $topics = DB::table('topics')->get();
        return view('pages.preview', ['topics' => $topics])->with('title', $title);
    }
    public function test()
    {
        $title = 'Preview';
        return view('pages.preview')->with('title', $title);
    }
    public function dashboard()
    {
        $title = 'Dashboard';
        return view('pages.dashboard')->with('title', $title);
    }  
    public function write()
    {
        $title = 'Write';
        return view('pages.write')->with('title', $title);
    }
   

}