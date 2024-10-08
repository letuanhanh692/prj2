<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IntroduceController extends Controller
{
    public function blog()

    {
        return view('front.introduce.blog');
    }
    public function team()
    {
        return view('front.introduce.team');
    }
    public function contact()
    {
        return view('front.introduce.contactUs');
    }
}
