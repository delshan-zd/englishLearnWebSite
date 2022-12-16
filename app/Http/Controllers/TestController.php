<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index()
    {
        //
        $pro = Test::all();
        return view('controlv.addtest',compact('pro'));
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


        $u = new \App\Test();
        $u->name = $request->input('name');
        $u->details = $request->input('details');
        $u->save();
        return redirect('/test');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      /*  $unit = Unit::all();
        //  $pro = Lesson::all();
        $pro = DB::select('SELECT l.id , l.audio , l.title ,l.details , l.image , l.unit_id , u.name as n1 , s.name FROM lessons l , units u , users s WHERE l.unit_id = u.id and s.id = l.user_id and u.id = '.$id);

        return view('controlv.addlesson',compact('pro','unit'));
*/
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
        $share = \App\Test::find($id);
        $share->delete();
        return redirect('/test');


    }
}
