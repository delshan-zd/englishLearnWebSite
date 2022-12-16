<?php

namespace App\Http\Controllers;

use App\GrammerType;
use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class grammertypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit = Lesson::all();
        //  $pro = Grammer::all();
        $pro = DB::select('SELECT g.id, g.name , g.use , l.title FROM grammer_types g , lessons l WHERE g.lesson_id = l.id');

        return view('controlv.addgrammertype',compact('pro','unit'));

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
            'name'=>'required',
            'use'=>'required',
            'lesson_id'=>'required',

        ]);


        $u = new GrammerType();
        $u->name = $request->input('name');
        $u->use = $request->input('use');
        $u->lesson_id = $request->input('lesson_id');

        $u->save();
        return redirect('/grammertype');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $unit = GrammerType::all();
        //  $pro = Grammer::all();
        $pro = DB::select('SELECT g.id , g.name , g.form , g.ex , t.name as title FROM grammers g , grammer_types t WHERE g.grammer_id = t.id and t.id = '.$id);

        return view('controlv.addgrammer',compact('pro','unit'));






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
        $share = GrammerType::find($id);
        $share->delete();
        return redirect('/grammertype');
    }
}
