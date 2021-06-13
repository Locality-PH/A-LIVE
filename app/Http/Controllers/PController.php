<?php

namespace App\Http\Controllers;

use App\Models\uprofile;
use Illuminate\Http\Request;
class PController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //showing of profile
        $uprofile = uprofile::all();
            return view("profile")->with("uprofile",$uprofile);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\uprofile  $uprofile
     * @return \Illuminate\Http\Response
     */
    public function show(uprofile $uprofile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\uprofile  $uprofile
     * @return \Illuminate\Http\Response
     */
    public function edit(uprofile $uprofile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\uprofile  $uprofile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, uprofile $uprofile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\uprofile  $uprofile
     * @return \Illuminate\Http\Response
     */
    public function destroy(uprofile $uprofile)
    {
        //
    }
}
