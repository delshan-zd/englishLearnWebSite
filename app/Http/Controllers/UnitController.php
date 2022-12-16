<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pro = Unit::all();
        return view('controlv.addunit',compact('pro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return 'create';
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
            'name'=>'required',
            'details'=>'required',

        ]);


     $image_name = date('mdYHis') . uniqid() . $request->file('image')->getClientOriginalName();
        $path = base_path() . '\public\storage\img';
        $request->file('image')->move($path,$image_name);


        $u = new Unit();
        $u->name = $request->input('name');
        $u->details = $request->input('details');
        $u->image = $image_name;

        $u->save();
        return redirect('/unit');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unit = Unit::all();
        $pro = DB::select('SELECT l.id , l.audio , l.title ,l.details , l.image , l.unit_id , u.name as n1 , s.name FROM lessons l , units u , users s WHERE l.unit_id = u.id and s.id = l.user_id and u.id = '.$id);

        return view('controlv.addlesson',compact('pro','unit'));

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
        $share = Unit::find($id);
        $share->delete();
        return redirect('/unit');


    }
}
