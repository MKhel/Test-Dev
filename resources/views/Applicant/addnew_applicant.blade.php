@extends('layouts.apps')

@section('title')
Add new applicant
@endsection

@section('content')

<div class="row">
<div class="col-md-12 header-top-text mb-4">
        <div class="mt-4 ml-4 mb-3">
        <div class="col-sm-8">
        <h2>Adding new applicant for {{$JobPosition[0]->position}}</h2>

        {{ Breadcrumbs::render('clients') }}
        </div>
        
</div>
      
      
</div>

</div>
@if(Session::has('client_added'))
<div class="col-lg-12">
                <div class="alert alert-success" role="alert">
                      {{Session::get('client_added')}}
                </div>
</div>
            @endif
<div class="form-container">
<form id="form-jo" action="/applicant" class="row g-3 needs-validation" method="POST" novalidate>

    
    <div class="col-12 mb-3">
        <label for="inputAddress2" class="form-label">Fist name</label>
        <input type="text" name="first_name" class="form-control" id="firstname" placeholder="Firstname" required>
    </div>
    <div class="col-12 mb-3">
        <label for="inputAddress2" class="form-label">Last name</label>
        <input type="text" name="last_name" class="form-control" id="lastname" placeholder="Lastname" required>
    </div>
    <div class="col-md-12 mb-3">
            <label for="inputDescription" class="form-label">Gender</label>
            <select name="gender" class="custom-select">
            <option  value="Male" required>Male</option>
            <option  value="Male" required>Female</option>
           </select>
    </div>
    <div class="col-12 mb-3">
        <label for="inputAddress2" class="form-label">Age</label>
        <input type="text" name="age" class="form-control" id="age" placeholder="Age" required>
    </div>    
    <div class="col-md-12 mb-3">
            <label for="inputDescription" class="form-label">Position</label>
            <select name="position" class="custom-select">
            <option  value="{{$JobPosition[0]->position}}" required>{{$JobPosition[0]->position}}</option>
           </select>
    </div>
    
  
           
           <input type="hidden" name="client_id" value="{{$JobPosition[0]->client_id}}" class="form-control" placeholder="Client ID" required>
   
   
           <input type="hidden" name="joborder_id" value="{{$JobPosition[0]->joborder_id}}" class="form-control" placeholder="JobOrder ID" required>
 
    <div class="col-md-12 mb-3">
            <label for="inputDescription" class="form-label">In Process Status</label>
            <select name="in_process_status" class="custom-select">
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


<br><br>
@endsection

@yield('footer')



