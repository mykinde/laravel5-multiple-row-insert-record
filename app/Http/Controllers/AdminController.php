<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Redirect;
use App\tbl_student;
use App\tbl_student_subject;
use App\tbl_subject;
use App\tbl_class;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //// Get the student data
		$students = tbl_student::paginate(7);
        $subjects = tbl_subject::all();
        $dclasses = tbl_class::all();
        $std_sbjs = tbl_student_subject::latest()->get();
 
		return view('view_student',['students'=>$students,'subjects'=>$subjects,'dclasses'=>$dclasses,'std_sbjs'=>$std_sbjs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function multipleRow(Request $request) {
		$data = $request->except('_token');
 
		$student_count = count($data['student_id']);
		for($i=0; $i < $student_count; $i++){
 
			$tss = new tbl_student_subject;
			$tss->student_id = $data['student_id'][$i];
			$tss->subject_id = $data['subject_id'];
			$tss->class_id = $data['class_id'];
			$tss->save();
        }
        
        return Redirect::back()->with('status', 'successfully inserted');
    
    }


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
        //
    }
}
