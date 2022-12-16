<?php

namespace App\Http\Controllers;

use App\Grammer;
use App\GrammerType;
use App\Lesson;
use App\Questions;
use App\Test;
use App\TQuestion;
use App\UngularVerb;
use App\Unit;
use App\User;
use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function main()
    {

        $u = Unit::all();
        $l = Lesson::all()->where('unit_id',10);

        $uu = Unit::find(10);


        return view('unitpage',compact('u','l','uu'));
    }


    public function main2($id)
    {

        $u = Unit::all();
        $l = Lesson::all()->where('unit_id',$id);
$uu = Unit::find($id);

        return view('unitpage',compact('u','l','uu'));

    }

    public function showlesson($id){

        $l = Lesson::find($id);

        $u = User::find( $l->user_id);

return view('lesson',compact('l','u'));
    }

    public function showhome(){
        return view('mainpage');
    }
   public function showabout(){
        return view('about');
    }

    public function showverbs(){

        $v = UngularVerb::all();

        return view('verbs', compact('v'));
    }


    public function showgrammers(){

        $v = GrammerType::all();

        return view('grammer', compact('v'));
    }
    public function showtests(){

        $v1 = Test::all();

        return view('tests', compact('v1'));
    }

    public function showgrammersdetail($id){

        $v = GrammerType::find($id);
        $det = Grammer::where('grammer_id',$id)->get();
//return $det;
        return view('grammerdetail', compact('v','det'));
    }
    public function showtestdetail($id){

        $v = Test::find($id);
        $det1 = TQuestion::where('test_id',$id)->get();


        return view('testdetails', compact('v','det1'));
    }


    public function showtexdetail($id){



        $l = Lesson::find($id);


        $det1 = Questions::where('lesson_id',$id)->get();


        return view('exdetails', compact('det1','l'));
    }


    public function grdetail($id){



        $v = GrammerType::where('lesson_id',$id)->first();



        $det = Grammer::where('grammer_id',$v->id)->get();
        return view('grammerdetail', compact('v','det'));


    }

}
