@extends('layouts.dashboard')
@section('title')
    Create Student Result
@endsection
@section('StudentContent')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                {{--error message section--}}
                @if(count($errors) > 1)
                    @foreach($errors->all() as $error)
                        <ul class="list-group alert">
                            <li class="alert-danger">{{$error}} </li>
                        </ul>
                    @endforeach
                @endif
                <form action="{{url('/StudentResult')}}" method="post" >
                    {{csrf_field()}}
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                    @foreach($studentProfiles as $studentProfile)
                        <input type="hidden" name="student_profile_id" value="{{$studentProfile->id}}">
                    @endforeach
                    <legend>Create Profile</legend>
                    <div class="form-group">
                        <label for="program">Program</label>
                        <select class="form-control" name="program" id="program" required>
                            <option value="MASTER OF BUSINESS ADMINISTRATION">MASTER OF BUSINESS ADMINISTRATION</option>
                            <option value="Bachelor of Science">Bachelor of Science</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <select class="form-control" name="semester" id="semester" required>
                            <option value="SPRING 2012">SPRING 2012</option>
                            <option value="SUMMER 2012">SUMMER 2012</option>
                            <option value="FALL 2012">FALL 2012</option>
                            <option value="SPRING 2013">SPRING 2013</option>
                            <option value="SUMMER 2013">SUMMER 2013</option>
                            <option value="FALL 2013">FALL 2013</option>
                            <option value="SPRING 2014">SPRING 2014</option>
                            <option value="SUMMER 2014">SUMMER 2014</option>
                            <option value="FALL 2014">FALL 2014</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Course_no">Course No:</label>
                        <select class="form-control" name="Course_no" id="Course_no" required>
                            <option value="ACT501">ACT501</option>
                            <option value="STA091">STA091</option>
                            <option value="ACT502">ACT502</option>
                            <option value="BUS503">BUS503</option>
                            <option value="MAT501">MAT501</option>
                            <option value="BUS502">BUS502</option>
                            <option value="HRM501">HRM501</option>
                            <option value="HRM502">HRM502</option>
                            <option value="MGT501">MGT501</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="course_title">Course Title</label>
                        <select class="form-control" name="course_title" id="course_title" required>
                            <option value="FINANCIAL ACCOUNTING">FINANCIAL ACCOUNTING</option>
                            <option value="BASIC COURSE IN STATISTICS">BASIC COURSE IN STATISTICS</option>
                            <option value="MANAGERIAL ACCOUNTING & CONTROL">MANAGERIAL ACCOUNTING & CONTROL</option>
                            <option value="ENVIRONMENT AND BUSINESS">ENVIRONMENT AND BUSINESS</option>
                            <option value="MATHEMATICS FOR DECISION MAKING">MATHEMATICS FOR DECISION MAKING</option>
                            <option value="MANAGERIAL COMMUNICATION">MANAGERIAL COMMUNICATION</option>
                            <option value="ORGANIZATIONAL BEHAVIOR & LEADERSHIP">ORGANIZATIONAL BEHAVIOR & LEADERSHIP</option>
                            <option value="MANAGERIAL ECONOMICS">MANAGERIAL ECONOMICS</option>
                            <option value="HUMAN RESOURCE MANAGEMENT">HUMAN RESOURCE MANAGEMENT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="course_credit">Course Credit</label>
                        <input type="number" step="any" name="course_credit" id="course_credit" class="form-control" placeholder="Course Credit" required>
                    </div>
                    <div class="form-group">
                        <label for="credit_earned">Credit Earned</label>
                        <input type="number" step="any" name="credit_earned" id="credit_earned" class="form-control" placeholder="Credit Earned" required>
                    </div>

                    <div class="form-group">
                        <label for="grade">Grade</label>
                        <select class="form-control" name="grade" id="grade" required>
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="B-">B-</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="grade_point">Grade Point</label>
                        <input type="number" step="any" name="grade_point" id="grade_point" class="form-control" placeholder="Grade Point" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Create</button>

                </form>
            </div>
        </div>
    </div>
@endsection