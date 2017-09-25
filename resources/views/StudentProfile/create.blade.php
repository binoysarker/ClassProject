@extends('layouts.dashboard')
@section('title')
    Create Student Profile
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
                <form action="{{url('/StudentProfile')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                    <legend>Create Profile</legend>
                    <div class="form-group">
                        <label for="FullName">Full name</label>
                        <input type="text" name="FullName" id="FullName" class="form-control" placeholder="Full Name"  required>
                    </div>
                    <div class="form-group">
                        <label for="DateOfBirth">Date Of Birth</label>
                        <input type="date" name="DateOfBirth" id="DateOfBirth" class="form-control" placeholder="Date Of Birth"  required>
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
                        <input type="text" name="Nationality" id="Nationality" class="form-control" placeholder="Nationality" required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" name="Email" id="Email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="PermanentAddress">Permanent Address</label>
                        <textarea name="PermanentAddress" id="PermanentAddress" class="form-control"  required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="HomePhone">Home Phone</label>
                        <input type="number" name="HomePhone" id="HomePhone" class="form-control" placeholder="Home Phone" required>
                    </div>
                    <div class="form-group">
                        <label for="NationalID">National ID</label>
                        <input type="number" name="NationalID" id="NationalID" class="form-control" placeholder="National ID" required>
                    </div>
                    <div class="form-group">
                        <label for="District">District</label>
                        <select class="form-control" name="District" id="District" required>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Chittagonj">Chittagonj</option>
                            <option value="Kumilla">Kumilla</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Country">Country</label>
                        <select class="form-control" name="Country" id="Country" required>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="India">India</option>
                            <option value="Pakistan">Pakistan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="BloodGroup">Blood Group</label>
                        <select class="form-control" name="BloodGroup" id="BloodGroup" required>
                            <option value="A+">A+</option>
                            <option value="AB+">AB+</option>
                            <option value="O+">O+</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Image_File">Image_File</label>
                        <input type="file" class="form-control-file" name="Image_File" id="Image_File" placeholder="Image_File" aria-describedby="fileHelpId" required>
                        <small id="fileHelpId" class="form-text text-muted">File size must be less then 60kb</small>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Create</button>

                </form>
            </div>
        </div>
    </div>
@endsection