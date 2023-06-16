<?php

namespace App\Http\Controllers;

class ServicesController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('services');
    }
}
