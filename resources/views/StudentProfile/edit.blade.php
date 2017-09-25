@extends('layouts.dashboard')
@section('title')
    Edit Student Profile
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
                <form action="{{url('/StudentProfile/'.$studentProfiles[0]['id'])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <legend>Edit Profile</legend>
                    @foreach($studentProfiles as $studentProfile)
                    <div class="form-group">
                        <label for="FullName">Full name</label>
                        <input type="text" name="FullName" id="FullName" class="form-control" value="{{$studentProfile->FullName}}"   required>
                    </div>
                    <div class="form-group">
                        <label for="DateOfBirth">Date Of Birth</label>
                        <input type="text" name="DateOfBirth" id="DateOfBirth" class="form-control" value="{{$studentProfile->DateOfBirth}}"   required>
                    </div>
                    <div class="form-group">
                        <label for="MaritalStatus">Marital Status</label>
                        <select class="form-control" name="MaritalStatus" id="MaritalStatus" required>
                            <option value="Bangladesh">Single</option>
                            <option value="India">Merried</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Nationality">Nationality</label>
                        <input type="text" name="Nationality" id="Nationality" class="form-control" value="{{$studentProfile->Nationality}}"  required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" name="Email" id="Email" class="form-control" value="{{$studentProfile->Email}}"  required>
                    </div>
                    <div class="form-group">
                        <label for="PermanentAddress">Permanent Address</label>
                        <textarea name="PermanentAddress" id="PermanentAddress" class="form-control" required>{{$studentProfile->PermanentAddress}}</textarea >
                    </div>
                    <div class="form-group">
                        <label for="HomePhone">Home Phone</label>
                        <input type="number" name="HomePhone" id="HomePhone" class="form-control" value="{{$studentProfile->HomePhone}}"  required>
                    </div>
                    <div class="form-group">
                        <label for="NationalID">National ID</label>
                        <input type="number" name="NationalID" id="NationalID" class="form-control" value="{{$studentProfile->NationalID}}"  required>
                    </div>
                    <div class="form-group">
                        <label for="District">District</label>
                        <select class="form-control" name="District" id="District" required>
                            <option value="{{$studentProfile->District}}">{{$studentProfile->District}}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Country">Country</label>
                        <select class="form-control" name="Country" id="Country" required>
                            <option value="{{$studentProfile->Country}}">{{$studentProfile->Country}}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="BloodGroup">Blood Group</label>
                        <select class="form-control" name="BloodGroup" id="BloodGroup" required>
                            <option value="{{$studentProfile->BloodGroup}}">{{$studentProfile->BloodGroup}}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <img class="col-lg-4 pl-0" src="{{asset(''.$studentProfile->Image_File)}}" alt="">
                        <input type="file" class="form-control-file" name="Image_File"  value=""  aria-describedby="fileHelpId"
                               required>
                        <small id="fileHelpId" class="form-text text-muted">File size must be less then 60kb</small>
                    </div>
                    @endforeach
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>

                </form>
            </div>
        </div>
    </div>
@endsection