<?php

namespace App\Http\Controllers;

use App\profile;
use Illuminate\Http\Request;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //read
        $profile = profile::all();

        return view('profile.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //function
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //function
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'gender'=>'required',
            'kota'=>'required',
        ]);

        $profile = new profile([
            'firstname'=> $request->get('firstname'),
            'lastname'=> $request->get('lastname'),
            'gender'=> $request->get('gender'),
            'kota'=> $request->get('kota'),
        ]);
        $profile->save();
        return redirect('/profile')->with('success', 'Profile saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //func edit
        $profile = profile::find($id);
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //func update
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'gender'=>'required',
            'kota'=>'required',
        ]);

        $profile = profile::find($id);
        $profile->firstname = $request->get('firstname');
        $profile->lastname = $request->get('lastname');
        $profile->gender = $request->get('gender');
        $profile->kota = $request->get('kota');
        $profile->save();

        return redirect('/profile')->with('success', 'Profile updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete func
        $profile = profile::find($id);
        $profile->delete();

        return redirect('/profile')->with('success', 'Profile deleted!');
    }
}
