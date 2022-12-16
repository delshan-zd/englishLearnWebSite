<?php

namespace App\Http\Controllers;

use App\UngularVerb;
use Illuminate\Http\Request;

class verbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $pro = UngularVerb::all();
        return view('controlv.addverb',compact('pro'));


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
        $request->validate([
            'verb'=>'required',
            'past'=>'required',
            'pp'=>'required',
            'trans'=>'required',

        ]);


        $u = new UngularVerb();
        $u->verb = $request->input('verb');
        $u->past = $request->input('past');
        $u->pp = $request->input('pp');
        $u->trans = $request->input('trans');
        $u->save();
        return redirect('/verb');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $share = UngularVerb::find($id);
        $share->delete();
        return redirect('/verb');

    }
}
