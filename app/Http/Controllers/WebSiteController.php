<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.index'); 
    }

    public function viewAboutUs()
    {
        return view('frontend.about');
    }

    public function viewInitiatives()
    {
        return view('frontend.initiatives');
    }

    public function viewGreenInitiatives()
    {
        return view('frontend.green-initatives');
    }

    public function viewContactUs()
    {
        return view('frontend.contact');
    }

    public function viewBrushes()
    {
        return view('frontend.brushes');
    }

    public function viewArtistCanvas()
    {
        return view('frontend.artistcanvas');
    }

    public function viewArtaccessories()
    {
        return view('frontend.artaccessories');
    }

    public function viewComponents()
    {
        return view('frontend.components');
    }

    public function viewCanvas()
    {
        return view('frontend.canvas');
    }

    public function viewWatercolor()
    {
        return view('frontend.water-color');
    }
  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
