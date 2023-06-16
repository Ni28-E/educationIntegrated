<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Analytic;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Container\Container;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;


class AnalyticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  

        // $this->authorize('viewAny', Analytic::class);

        $analytics = Analytic::paginate(10);
        // dd($analytics);

        return view('Analytics.index', compact('analytics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 

        // return view('Analytics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Analytic  $analytic
     * @return \Illuminate\Http\Response
     */
    public function show(Analytic $analytic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Analytic  $analytic
     * @return \Illuminate\Http\Response
     */
    public function edit(Analytic $analytic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Analytic  $analytic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Analytic $analytic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Analytic  $analytic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Analytic $analytic)
    {
        //
    }

    public function details($id, )
    {
        
        $history = Analytic::where('id', $id)->get()->toArray();
        // dd($history[0]);
        $history[0]['history'] = History::where('analytic_id', $id)->get()->toArray();
        // dd($history[0]);
        return view('Analytics.details', ['history' => $history[0]]);
    }
    public function apiHistory($id)
    {
        $history = Analytic::find($id)->get()->toArray();
        $history[0]['history'] = History::where('analytic_id', $id)->get()->toArray();
        // dd($history[0]);
        //return json response
        return response()->json($history[0]);
    }

}