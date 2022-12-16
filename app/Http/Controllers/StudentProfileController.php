<?php

namespace App\Http\Controllers;

use App\Grammer;
use App\Lesson;
use App\Test;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $uid=  Auth::id();
        $s = DB::select('SELECT t.name, t.details  FROM tests t , t_questions tq , tanswers ta WHERE  t.id = tq.test_id and tq.id = ta.question_id and ta.user_id='.$uid.' GROUP BY t.id , t.name , t.details');



        return view('controlv.studenttest', compact('s'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $u1  = DB::select('SELECT  p.name , p.created_at , p.type FROM  users p where   p.type = 1');
        $u2  = DB::select('SELECT  p.name , p.created_at , p.type FROM  users p where   p.type = 2');


        $pro1  = DB::select('SELECT  p.name , p.created_at , p.type FROM  users p where  p.created_at > (NOW() - INTERVAL 1 MONTH) and p.type = 1');
        $pro2  = DB::select('SELECT  p.name , p.created_at , p.type FROM  users p where  p.created_at > (NOW() - INTERVAL 1 MONTH) and p.type = 2');
        $pro3  = DB::select('SELECT  p.name , p.created_at , p.type FROM  users p where  p.created_at > (NOW() - INTERVAL 1 YEAR) and p.type = 1');
        $pro4  = DB::select('SELECT  p.name , p.created_at , p.type FROM  users p where  p.created_at > (NOW() - INTERVAL 1 YEAR) and p.type = 2');
        $pro5  = DB::select('SELECT  t.id , T.name , COUNT(Q.id) AS CO FROM tanswers a, tests t , t_questions q where a.question_id  = q.id and t.id = q.test_id and a.user_id=1 GROUP BY t.id , T.name');
        $pro6  = DB::select('SELECT u.name , COUNT(l.id) as CO FROM units u , lessons l WHERE u.id = l.unit_id GROUP  by u.id , u.name');
$pro7 = DB::select('SELECT t.name, t.details , uu.name as name1 FROM tests t , t_questions tq , tanswers ta , users uu WHERE uu.id = ta.user_id and t.id = tq.test_id and tq.id = ta.question_id GROUP BY t.id , t.name , t.details , name1');


        $t1 = Test::all()->count();
        $t2= Unit::all()->count();
        $t3=Lesson::all()->count();
        $t4= Grammer::all()->count();



        return view('controlv.reposts',compact('pro6','u1','u2','pro1','pro2','pro3','pro4','t1','t2','t3','t4','pro5','pro7'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {



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
