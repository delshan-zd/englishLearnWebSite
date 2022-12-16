<?php

namespace App\Http\Controllers;

use App\Test;
use App\TQuestion;
use Illuminate\Http\Request;

class TQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'name' => 'required',
            'a1' => 'required',
            'a2' => 'required',

            'correct' => 'required',
            'test_id' => 'required',

        ]);

        $tt = $request->input('an');

        $u = new TQuestion();
        $u->name = $request->input('name');


        if ($tt == 4) {
            $u->a1 = $request->input('a1');
            $u->a2 = $request->input('a2');
        $u->a3 = $request->input('a3');
        $u->a4 = $request->input('a4');
    }else{
            $u->a1 = -1;
            $u->a2 = -1;
            $u->a3 = -1;
            $u->a4 = -1;
        }

        $u->correct = $request->input('correct');
        $u->test_id = $request->input('test_id');


        $u->save();



$id = $request->input('test_id');



        $test = Test::find($id);
        $pro = TQuestion::where('test_id',$id)->get();

        return view('controlv.addtquestion',compact('pro','test'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $test = Test::find($id);
        $pro = TQuestion::where('test_id',$id)->get();

        return view('controlv.addtquestion',compact('pro','test'));

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
        $share = TQuestion::find($id);
        $i1 = $share->test_id;

       // return $i1;
        $share->delete();



        $test = Test::find($i1);
        $pro = TQuestion::where('test_id',$i1)->get();
        return view('controlv.addtquestion',compact('pro','test'));


    }
}
