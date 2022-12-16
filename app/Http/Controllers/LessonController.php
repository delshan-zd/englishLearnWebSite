<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $unit = Unit::all();
      //  $pro = Lesson::all();
$pro = DB::select('SELECT l.id , l.audio , l.title ,l.details , l.image , l.unit_id , u.name as n1 , s.name FROM lessons l , units u , users s WHERE l.unit_id = u.id and s.id = l.user_id');

        return view('controlv.addlesson',compact('pro','unit'));

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
            'title'=>'required',
            'details'=>'required',
            'unit_id'=>'required',

        ]);

              $image_name = date('mdYHis') . uniqid() . $request->file('image')->getClientOriginalName();
               $path = base_path() . '\public\storage\img';
               $request->file('image')->move($path,$image_name);

        $filename ='';
        if ($request->hasFile('audio')) {
            $audio_name1 = $request->file('audio');
            $filename = date('mdYHis') . uniqid() . $request->file('audio')->getClientOriginalName();
            $location = public_path('/storage/');
            $audio_name1->move($location, $filename);

        }

        $uid=  Auth::id();


        $u = new Lesson();
        $u->title = $request->input('title');
        $u->details = $request->input('details');
        $u->user_id = $uid;
        $u->unit_id = $request->input('unit_id');
        $u->image = $image_name;
        $u->audio = $filename;

        $u->save();
        return redirect('/lesson');

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
        $share = Lesson::find($id);
        $share->delete();
        return redirect('/lesson');
    }
}
