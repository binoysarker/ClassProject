@extends('layouts.dashboard')
@section('title')
    Dashboard | Student Result
@endsection
@section('StudentContent')
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 pl-0">
                {{--seccess message --}}
                @include('partials.successMessage');
                <div class="card bg-faded ">
                    <a href="{{url('/StudentResult/create')}}" class="btn btn-primary">Create Student Result</a>
                    <h5 class=" col-lg-4 bg-danger text-white card-title" >Grade Sheet Information</h5>
                    @foreach($studentResults as $studentResult)
                        <h4>Student ID : {{$studentResult->student_profile_id}}</h4>
                    @endforeach
                    @foreach($studentProfiles as $studentProfile)
                        <h4>Name : {{$studentProfile->FullName}}</h4>
                    @endforeach
                    @foreach($studentResults as $studentResult)
                        <h4>Program : {{$studentResult->program}}</h4>
                    @endforeach
                    <div class="card-block">
                        <table class="table">
                            <thead class="table-inverse table-bordered text-white">
                            <tr>
                                <th>Course No</th>
                                <th>Course Title</th>
                                <th>Course Credit</th>
                                <th>Credit Earned</th>
                                <th>Grade</th>
                                <th>Grade Point</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($studentResults as $studentResult)
                                <tr>
                                    <td>{{$studentResult->Course_no}}</td>
                                    <td>{{$studentResult->course_title}}</td>
                                    <td>{{$studentResult->course_credit}}</td>
                                    <td>{{$studentResult->credit_earned}}</td>
                                    <td>{{$studentResult->grade}}</td>
                                    <td>{{$studentResult->grade_point}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection