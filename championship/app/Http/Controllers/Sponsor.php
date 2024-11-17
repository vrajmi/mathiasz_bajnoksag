<?php

namespace App\Http\Controllers;

use App\Models\SponsorModel;
use Illuminate\Http\Request;

class Sponsor extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $AllSponsor = SponsorModel::all();

        return view('sponsor.index', compact('AllSponsor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sponsor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'sName' => 'required',
                'sMail' => 'required',
                'sponsorship' => 'required'
            ]
        );

        $NewSponsor = new SponsorModel();
        $NewSponsor->name = $request->sName;
        $NewSponsor->email = $request->sMail;
        $NewSponsor->sponsorship = $request->sponsorship;
        $NewSponsor->save();

        return redirect(url('/'));
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
