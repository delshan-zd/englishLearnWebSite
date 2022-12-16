<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Tanswer;
use App\TQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

       $c =  $request->input('count');

       for($i=0;$i<$c;$i++)
       {

           $t = new Answer();

           $t->question_id =   $request->input('qu')[$i];
           $t->user_id = 1;
           $t->answer =  $request->input('an')[$i];


           $ss =  Answer::where('question_id',$t->question_id)->delete();

           $t->save();


       }


$id= $request->input('id');

        $pro = DB::select('select q.name , q.a1, q.a2 , q.a3 , q.a4 , q.correct as q , a.answer as an FROM questions q , answers a where q.id = a.question_id and q.lesson_id ='.$id);
       return view('check', compact('pro'));

     //   return $request->input('an')['0'];


    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {





        $pro = DB::select('select q.name , q.a1, q.a2 , q.a3 , q.a4 , q.correct as q , a.answer as an FROM questions q , answers a where q.id = a.question_id and q.lesson_id ='.$id);
        return view('check', compact('pro'));



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
        //
    }
}
