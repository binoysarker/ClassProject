<?php

namespace App\Http\Controllers;

use App\EducationInformation;
use App\StudentProfile;
use Illuminate\Http\Request;

class EducationInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentProfiles = StudentProfile::all();
        $educationInformations = EducationInformation::all();
        return view('StudentProfile.index',compact('studentProfiles','educationInformations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $studentProfiles = StudentProfile::all();
        return view('EducationInformation.create',compact('studentProfiles'));
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
            'Exam_Title'     =>  'required|max:15',
            'BoardInstitute'     =>  'required|max:55',
            'Passing_Year'     =>  'required|numeric',
            'Result_Type'     =>  'required|max:5',
            'GPA'     =>  'required',
        ]);
//         Now for storing the values in the datebase
        $educationInformations = new EducationInformation;
        $educationInformations->user_id = auth()->user()->id;
        $educationInformations->student_profile_id = $request->student_profile_id;
        $educationInformations->Exam_Title = $request->Exam_Title;
        $educationInformations->BoardInstitute = $request->BoardInstitute;
        $educationInformations->Passing_Year = (int)$request->Passing_Year;
        $educationInformations->Result_Type = $request->Result_Type;
        $educationInformations->GPA = (double)$request->GPA;
        $educationInformations->save();
        return redirect('/EducationInformation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EducationInformation  $educationInformation
     * @return \Illuminate\Http\Response
     */
    public function show(EducationInformation $educationInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EducationInformation  $educationInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(EducationInformation $educationInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EducationInformation  $educationInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EducationInformation $educationInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EducationInformation  $educationInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(EducationInformation $educationInformation)
    {
        //
    }
}
