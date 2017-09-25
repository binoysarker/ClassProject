@extends('layouts.dashboard')
@section('title')
    Create Education Information
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
                <form action="{{url('/EducationInformation')}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                    @foreach($studentProfiles as $studentProfile)
                        <input type="hidden" name="student_profile_id" value="{{$studentProfile->id}}">
                    @endforeach
                    <legend>Create Education Information</legend>
                    <div class="form-group">
                        <label for="Exam_Title">Exam Title</label>
                        <select class="form-control" name="Exam_Title" id="Exam_Title" required>
                            <option value="SSC">SSC</option>
                            <option value="HSC">HSC</option>
                            <option value="BSc">BSc</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="BoardInstitute">Board/Institute</label>
                        <select class="form-control" name="BoardInstitute" id="BoardInstitute" required>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Kumilla">Kumilla</option>
                            <option value="Chittagonj">Chittagonj</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Passing_Year">Passing Year</label>
                        <input type="number" name="Passing_Year" id="Passing_Year" class="form-control" placeholder="Passing Year"  required>
                    </div>
                    <div class="form-group">
                        <label for="Result_Type">Result Type</label>
                        <select class="form-control" name="Result_Type" id="Result Type" required>
                            <option value="GPA">GPA</option>
                            <option value="Division">Division</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="GPA">GPA</label>
                        <input type="number" step="any" name="GPA" id="GPA" class="form-control" placeholder="GPA" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Create</button>

                </form>
            </div>
        </div>
    </div>
@endsection