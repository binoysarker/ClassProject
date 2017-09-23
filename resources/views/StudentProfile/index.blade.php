@extends('layouts.dashboard')
@section('title')
    Dashboard | Student Home
@endsection
@section('StudentContent')
    <legend >Profile Detail</legend>
    <hr>
    <legend class="label-info">Program Information</legend>
    <dl class="row">
        <dt class="col-sm-3">Programs:</dt>
        <dd class="col-sm-9"></dd>
        <dt class="col-sm-3">Student Type:</dt>
        <dd class="col-sm-9"></dd>
    </dl>
    <legend class="label-info">Student Information</legend>

    <dl class="row">
        <dt class="col-sm-3">Student ID:</dt>
        <dd class="col-sm-9"></dd>
        <dt class="col-sm-3">Full name:</dt>
        <dd class="col-sm-9"></dd>
        <dt class="col-sm-3">Date of Birth:</dt>
        <dd class="col-sm-9"></dd>
        <dt class="col-sm-3">Marital Status:</dt>
        <dd class="col-sm-9"></dd>
        <dt class="col-sm-3">Nationality:</dt>
        <dd class="col-sm-9"></dd>
        <dt class="col-sm-3">Email:</dt>
        <dd class="col-sm-9"></dd>
        <dt class="col-sm-3">Permanent Address:</dt>
        <dd class="col-sm-9"></dd>
        <dt class="col-sm-3">Home Phone:</dt>
        <dd class="col-sm-9"></dd>
        <dt class="col-sm-3">National ID:</dt>
        <dd class="col-sm-9"></dd>
        <dt class="col-sm-3">District:</dt>
        <dd class="col-sm-9"></dd>
        <dt class="col-sm-3">Country:</dt>
        <dd class="col-sm-9"></dd>
        <dt class="col-sm-3">Blood Group:</dt>
        <dd class="col-sm-9"></dd>




        <dd class="col-sm-9">
            <dl class="row">
                <dt class="col-sm-4">Nested title</dt>
                <dd class="col-sm-8">Nested definition</dd>
            </dl>
        </dd>
    </dl>
    
    {{--education information section--}}
    <legend class="label-info">Education Information</legend>
    <table class="table table-hover">
        <legend>Exam Title:HSS</legend>
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
            <td scope="row">Dhaka</td>
            <td>2004</td>
            <td>Grade</td>
            <td>3.3</td>
        </tr>
        <tr>
            <td scope="row">Dhaka</td>
            <td>2004</td>
            <td>Grade</td>
            <td>3.3</td>
        </tr>
        </tbody>
    </table>
@endsection