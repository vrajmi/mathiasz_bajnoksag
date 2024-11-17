<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $AllUser = UserModel::all();

        return view('user.index', compact('AllUser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'uName' => 'required',
                'uMail' => 'required',
                'uPhone' => 'required',
                'uType' => 'required'
            ]
        );

        $NewUser = new UserModel();
        $NewUser->name = $request->uName;
        $NewUser->email = $request->uMail;
        $NewUser->phone = $request->uPhone;
        $NewUser->type = $request->uType;
        $NewUser->save();

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
