<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Questions;
use App\Test;
use Illuminate\Http\Request;
use Symfony\Component\Console\Question\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit = Lesson::all();
         $pro = Questions::all();

        return view('controlv.addquestion',compact('pro','unit'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unit = Test::all();
        $pro = Questions::all();

        return view('controlv.addtestquetion',compact('pro','unit'));

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
            'a1'=>'required',
            'a2'=>'required',
            'a3'=>'required',
            'a4'=>'required',
            'correct'=>'required',
            'lesson_id'=>'required',
            'type'=>'required',

        ]);
        $u = new Questions();
        $u->name = $request->input('name');
        $u->a1 = $request->input('a1');
        $u->a2 = $request->input('a2');
        $u->a3 = $request->input('a3');
        $u->a4 = $request->input('a4');
        $u->correct = $request->input('correct');
        $u->type = $request->input('type');
        $u->lesson_id = $request->input('lesson_id');


        $u->save();
        return redirect('/question');

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
        $share = Questions::find($id);
        $share->delete();
        return redirect('/question');
    }
}
