<?php

namespace App\Http\Controllers;

use App\Models\News;

class FrontEndController extends Controller
{
    public function showTimeline()
    {
        return view('timeline', ['news' => News::where('id', '>', 0)->orderBy('created_at', 'desc')->get()]);
    }
}
