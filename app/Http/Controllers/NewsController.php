<?php

namespace App\Http\Controllers;

class NewsController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('news');
    }
}
