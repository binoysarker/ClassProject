<?php

namespace App\Http\Controllers;

use App\StudentProfile;
use App\StudentResult;
use Illuminate\Http\Request;

class StudentResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentResults = StudentResult::all();
        $studentProfiles = StudentProfile::all();
        return view('StudentResult.index',compact('studentResults','studentProfiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $studentProfiles = StudentProfile::all();
        return view('StudentResult.create',compact('studentProfiles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'program'     =>  'required|unique:student_results',
            'semester'     =>  'required|unique:student_results',
            'Course_no'     =>  'required|unique:student_results',
            'course_title'     =>  'required|unique:student_results',
            'course_credit'     =>  'required',
            'credit_earned'     =>  'required',
            'grade'     =>  'required',
            'grade_point'     =>  'required',
        ]);
//         Now for storing the values in the datebase
        $studentResult = new StudentResult;
        $studentResult->user_id = $request->user_id;
        $studentResult->student_profile_id = $request->student_profile_id;
        $studentResult->program = $request->program;
        $studentResult->semester = $request->semester;
        $studentResult->Course_no = $request->Course_no;
        $studentResult->course_title = $request->course_title;
        $studentResult->course_credit = $request->course_credit;
        $studentResult->credit_earned = $request->credit_earned;
        $studentResult->grade = $request->grade;
        $studentResult->grade_point = $request->grade_point;
        $studentResult->save();
        session()->flash('message','Data Inserted Successfuly');
        return redirect('/StudentResult');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentResult  $studentResult
     * @return \Illuminate\Http\Response
     */
    public function show(StudentResult $studentResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentResult  $studentResult
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentResult $studentResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentResult  $studentResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentResult $studentResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentResult  $studentResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentResult $studentResult)
    {
        //
    }
}
