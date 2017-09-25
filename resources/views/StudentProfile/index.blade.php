@extends('layouts.dashboard')
@section('title')
    Dashboard | Student Home
@endsection
@section('StudentContent')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pl-0">
                <div class="card">
                    <div class="card-block">
                        <a href="{{url('/StudentProfile/create')}}" class="btn btn-primary">Create Student Profile</a>
                        {{--seccess message --}}
                        @include('partials.successMessage');
                        <legend >Profile Detail</legend>
                        <hr>
                        <legend class="label-info">Program Information</legend>
                        <dl class="row">
                            <dt class="col-sm-3">Programs:</dt>
                            <dd class="col-sm-9"></dd>
                            <dt class="col-sm-3">Student Type:</dt>
                            <dd class="col-sm-9"></dd>
                        </dl>
                        @foreach($studentProfiles as $studentProfile)
                            <legend class="label-info">Student Information <span class="pull-right"><a href="{{url('/StudentProfile/'.$studentProfile->id.'/edit')}}"><i class="fa fa-edit"
                                                                                                                                                                         aria-hidden="true"></i></a></span></legend>

                            <dl class="row">
                                <dt class="col-sm-3"><img src="{{asset(''.$studentProfile->Image_File)}}" class="img-responsive " alt=""></dt>
                                <dd class="col-sm-9"></dd>
                                <dt class="col-sm-3">Student ID:</dt>
                                <dd class="col-sm-9">{{$studentProfile->id}}</dd>
                                <dt class="col-sm-3">Full name:</dt>
                                <dd class="col-sm-9">{{$studentProfile->FullName}}</dd>
                                <dt class="col-sm-3">Date of Birth:</dt>
                                <dd class="col-sm-9">{{$studentProfile->DateOfBirth}}</dd>
                                <dt class="col-sm-3">Marital Status:</dt>
                                <dd class="col-sm-9">{{$studentProfile->MaritalStatus}}</dd>
                                <dt class="col-sm-3">Nationality:</dt>
                                <dd class="col-sm-9">{{$studentProfile->Nationality}}</dd>
                                <dt class="col-sm-3">Email:</dt>
                                <dd class="col-sm-9">{{$studentProfile->Email}}</dd>
                                <dt class="col-sm-3">Permanent Address:</dt>
                                <dd class="col-sm-9">{{$studentProfile->PermanentAddress}}</dd>
                                <dt class="col-sm-3">Home Phone:</dt>
                                <dd class="col-sm-9">{{$studentProfile->HomePhone}}</dd>
                                <dt class="col-sm-3">National ID:</dt>
                                <dd class="col-sm-9">{{$studentProfile->NationalID}}</dd>
                                <dt class="col-sm-3">District:</dt>
                                <dd class="col-sm-9">{{$studentProfile->District}}</dd>
                                <dt class="col-sm-3">Country:</dt>
                                <dd class="col-sm-9">{{$studentProfile->Country}}</dd>
                                <dt class="col-sm-3">Blood Group:</dt>
                                <dd class="col-sm-9">{{$studentProfile->BloodGroup}}</dd>
                            </dl>
                        @endforeach

                        {{--education information section--}}

                        <legend class="label-info">Education Information <span class="pull-right"><a href="{{url('/EducationInformation/'.$educationInformations[0]['id'].'/edit')}}"><i class="fa
                fa-edit"
                                                                                                                                                                                         aria-hidden="true"></i></a></span></legend>


                        <a href="{{url('/EducationInformation/create')}}" class="btn btn-primary">Create Education Section</a>
                        @foreach($educationInformations as $educationInformation)
                            <table class="table table-bordered d-sm-table">
                                <h5><strong>Exam Title:{{$educationInformation->Exam_Title}}</strong></h5>
                                <thead>
                                <tr>
                                    <th>Board</th>
                                    <th>Passing Year</th>
                                    <th>Result Type</th>
                                    <th>GPA</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td scope="row">{{$educationInformation->BoardInstitute}}</td>
                                    <td>{{$educationInformation->Passing_Year}}</td>
                                    <td>{{$educationInformation->Result_Type}}</td>
                                    <td>{{$educationInformation->GPA}}</td>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection