<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;
use App\Tanswer;
use App\TQuestion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TAnswerController extends Controller
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

        $uid=  Auth::id();

        for($i=0;$i<$c;$i++)
        {

            $t = new Tanswer();

            $t->question_id =   $request->input('qu')[$i];
            $t->user_id = $uid;
            $t->answer =  $request->input('an')[$i];

            $ss =  Tanswer::where('question_id',$t->question_id)
                ->where('user_id',$uid)->delete();



            $t->save();


        }

$id1 = $request->input('test');

        $pro = DB::select('select q.name , q.a1, q.a2 , q.a3 , q.a4 , q.correct as q , a.answer as an FROM t_questions q , tanswers a where q.id = a.question_id and q.test_id ='.$id1.' and a.user_id='.$uid);
       // return $pro;
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

        $pro = DB::select('select q.name , q.a1, q.a2 , q.a3 , q.a4 , q.correct as q , a.answer as an FROM t_questions q , tanswers a where q.id = a.question_id and q.test_id ='.$id);
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
       // return $id.'%';
return view('result',compact('id'));

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
