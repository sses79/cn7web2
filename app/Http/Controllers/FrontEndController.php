<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Phone;

class FrontEndController extends Controller
{
    public function showTimeline()
    {
        return view('front.timeline', ['news' => News::where('id', '>', 0)->orderBy('created_at', 'desc')->get()]);
    }

    public function showFeature()
    {
        return view('front.feature');
    }

    public function showPortfolio()
    {
        return view('front.portfolio', ['phones' => Phone::where('id', '>', 1)->take(18)->get()->chunk(6)]);
    }
}
