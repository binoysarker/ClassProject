<?php

namespace App\Http\Controllers;

use App\EducationInformation;
use App\StudentProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentProfileController extends Controller
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
        return view('StudentProfile.create');
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
            'FullName'     =>  'required|max:55|unique:student_profiles',
            'DateOfBirth'     =>  'required|date',
            'MaritalStatus'     =>  'required|max:15',
            'Nationality'     =>  'required|max:15',
            'Email'     =>  'required|email',
            'PermanentAddress'     =>  'required',
            'HomePhone'     =>  'required|numeric',
            'NationalID'     =>  'required|numeric',
            'District'     =>  'required|max:12',
            'Country'     =>  'required|max:15',
            'BloodGroup'     =>  'required|max:3',
            'Image_File'     =>  'required|file|image',
        ]);
//         Now for storing the values in the datebase
        $studentProfile = new StudentProfile;
        $studentProfile->user_id = auth()->user()->id;
        $studentProfile->FullName = $request->FullName;
        $studentProfile->DateOfBirth = $request->DateOfBirth;
        $studentProfile->MaritalStatus = $request->MaritalStatus;
        $studentProfile->Nationality = $request->Nationality;
        $studentProfile->Email = $request->Email;
        $studentProfile->PermanentAddress = $request->PermanentAddress;
        $studentProfile->HomePhone = $request->HomePhone;
        $studentProfile->NationalID = $request->NationalID;
        $studentProfile->District = $request->District;
        $studentProfile->Country = $request->Country;
        $studentProfile->BloodGroup = $request->BloodGroup;

//        coding for the image upload section

        if ($request->hasFile('Image_File')){
            $image = $request->file('Image_File');
            if ($image){
                $imageName = str_random(20);
                $ext = strtolower($image->getClientOriginalExtension());
                $full_image_name = $imageName.'.'.$ext;
                $upload_path = 'upload/';
                $image_url = $upload_path.$full_image_name;
                $success = $image->move($upload_path,$full_image_name);
                if ($success){
                    $studentProfile->Image_File = $image_url;
                    $studentProfile->save();
                    session()->flash('message','Data Inserted Successfully');
                    return redirect('/StudentProfile');
                }
                else{
                    echo 'No file uploaded';
                }
            }
            else{
                $studentProfile->save();
                session()->flash('message','Data Inserted Successfully');
                return redirect('/StudentProfile');
            }
        }
//        Now to save the data in the database
        $studentProfile->save();
        session()->flash('message','Data Inserted Successfully');
        return redirect('/StudentProfile');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentProfile  $studentProfile
     * @return \Illuminate\Http\Response
     */
    public function show(StudentProfile $studentProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentProfile  $studentProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentProfile $studentProfile)
    {
        $studentProfiles = $studentProfile->all();
        return view('StudentProfile.edit',compact('studentProfiles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentProfile  $studentProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentProfile $studentProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentProfile  $studentProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentProfile $studentProfile)
    {
        //
    }
}
