@extends('layouts.apps')

@section('title')
Add new applicant
@endsection

@section('content')
<div class="content-container">
<div class="row">
<div class="col-lg-12">
      <div class="mt-4 ml-4 mb-3">
        </div>
</div>
@if(Session::has('applicant_update'))
<div class="col-lg-12">
                <div class="alert alert-success" role="alert">
                      {{Session::get('applicant_update')}}
                </div>
</div>
            @endif
<div class="form-container">
<form id="form-jo" action="/applicant/{{$applicant[0]->applicant_id}}" class="row g-3 needs-validation" method="POST" novalidat>
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <div class="col-md-12 form-header" >
        <h3>Edit applicant</h3>
    </div>
    <div class="col-12 mb-3">
        <label for="inputAddress2" class="form-label">Fist name</label>
        <input type="text" name="first_name" class="form-control" id="firstname" value="{{$applicant[0]->first_name}}" placeholder="{{$applicant[0]->first_name}}" required>
    </div>
    <div class="col-12 mb-3">
        <label for="inputAddress2" class="form-label">Last name</label>
        <input type="text" name="last_name" class="form-control" id="lastname" value="{{$applicant[0]->last_name}}" placeholder="{{$applicant[0]->last_name}}" required>
    </div>
    <div class="col-md-12 mb-3">
            <label for="inputDescription" class="form-label" >Gender</label>
            <select name="gender" class="custom-select" >
            <option  value="{{$applicant[0]->gender}}" required>Male</option>
            <option  value="Female" required>Female</option>
           </select>
    </div>
    <div class="col-12 mb-3">
        <label for="inputAddress2" class="form-label">Age</label>
        <input type="text" name="age" class="form-control" id="age" value="{{$applicant[0]->age}}" placeholder="{{$applicant[0]->age}}" required>
    </div>    
    <div class="col-md-12 mb-3">
            <label for="inputDescription" class="form-label">Position</label>
            <select name="position" class="custom-select">
            <option  value="{{$applicant[0]->position}}" required>{{$applicant[0]->position}}</option>
           </select>
    </div>
    
    <div class="col-md-12 mb-3">
            <label for="inputDescription" class="form-label">Client ID</label>
            <select name="client_id" class="custom-select">
            <option  value="{{$applicant[0]->client_id}}" required>{{$applicant[0]->client_id}}</option>
           </select>
    </div>
    <div class="col-md-12 mb-3">
            <label for="inputDescription" class="form-label">JobOrder ID</label>
            <select name="joborder_id" class="custom-select">
            <option  value="{{$applicant[0]->joborder_id}}" required>{{$applicant[0]->joborder_id}}</option>
           </select>
    </div>
    <div class="col-md-12 mb-3">
            <label for="inputDescription" class="form-label">In Process Status</label>
            <select value="{{$applicant[0]->in_process_status}}" name="in_process_status" class="custom-select">
            <option  value="Medical" required>Medical</option>
            <option  value="Visa" required>Visa</option>
            <option  value="OEC" required>OEC</option>
           </select>
    </div>
    <div class="col-md-12 mb-3">
            <label for="inputDescription" class="form-label">Job Application Status</label>
            <select name="job_application_status" class="custom-select">
            <option  value="Line Up" required>Line Up</option>
            <option  value="Selected" required>Selected</option>
            <option  value="Signed JOL" required>Signed JOL</option>
           </select>
    </div>
  

  <div class="col-md-12 mt-5">
    <button type="submit" class="primary-btn">Submit</button>
  </div>
</form>
</div>

</div>
</div>

@endsection

@yield('footer')



