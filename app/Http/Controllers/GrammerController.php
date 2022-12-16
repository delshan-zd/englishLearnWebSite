<?php

namespace App\Http\Controllers;

use App\Grammer;
use App\GrammerType;
use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrammerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit = GrammerType::all();
      //  $pro = Grammer::all();
$pro = DB::select('SELECT g.id , g.name , g.form , g.ex , t.name as title FROM grammers g , grammer_types t WHERE g.grammer_id = t.id');

        return view('controlv.addgrammer',compact('pro','unit'));

    }

    /**q
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
            'form'=>'required',
            'ex'=>'required',
            'grammer_id'=>'required',

        ]);


        $u = new Grammer();
        $u->name = $request->input('name');
        $u->form = $request->input('form');
        $u->ex = $request->input('ex');
        $u->grammer_id = $request->input('grammer_id');

        $u->save();
        return redirect('/grammer');

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
        $share = Grammer::find($id);
        $share->delete();
        return redirect('/grammer');
    }
}
