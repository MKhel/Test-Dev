@extends('layouts.apps')

@section('title')
Add Job Orders
@endsection

@section('content')
<div class="sub-container">
<div class="row">
  <div class="col-md-12 header-top-text mb-4">
          <div class="mt-4 ml-4 mb-3">
            <div class="col-sm-8">
            <h2>Add Job Order for {{$clientData->clients_name}}</h2>

            {{ Breadcrumbs::render('addclient') }}
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


<div class="row">
<div class="form-container" style="padding: 50px;">
<form id="form-jo" action="/joborder" class="row g-3 needs-validation" method="POST" novalidat>
    
    <div class="col-md-12 mb-3">
            <label for="inputDescription" class="form-label">Client ID</label>
            <select name="Client_id" class="custom-select">
            <option  value="{{$clientData->id}}" required>{{$clientData->id}}</option>
           </select>
    </div>
    <div class="col-md-12 mb-3">
            <label for="inputDescription" class="form-label">Client Name</label>
            <select name="Client_Name" class="custom-select">
            <option  value="{{$clientData->clients_name}}" required>{{$clientData->clients_name}}</option>
           </select>
    </div>
    <div class="col-md-12 mb-3">
            <label for="inputDescription" class="form-label">Country</label>
            <select name="Country" class="custom-select">
            <option  value="{{$clientData->country}}" required>{{$clientData->country}}</option>
           </select>
    </div>
    <div class="col-md-12 mb-3">
            <label for="inputDescription" class="form-label">Jobsite</label>
            <select name="Jobsite" class="custom-select">
            <option  value="{{$clientData->jobsite}}" required>{{$clientData->jobsite}}</option>
           </select>
    </div>
    <div class="col-md-12 mb-3">
            <label for="inputDescription" class="form-label">POEA Accreditation</label>
            <select name="POEA_Accreditation" class="custom-select">
            <option  value="{{$clientData->poea_accredition}}" required>{{$clientData->poea_accredition}}</option>
           </select>
    </div>
  <div class="col-12 mb-3">
    <label for="inputAddress2" class="form-label">Actual Position</label>
    <input type="text" name="Actual_Position" class="form-control" id="inputAddress2" placeholder="Civil Engineers (Senior Site Engineer" required>
  </div>
  <div class="col-12 mb-3">
    <label for="inputAddress2" class="form-label">Position</label>
    <input type="text" name="Position" class="form-control" id="inputAddress2" placeholder="Engineer" required>
  </div>
  <div class="col-12 mb-3">
    <label for="inputAddress2" class="form-label">Gender</label>
    <select name="Gender" class="custom-select" >
                  <option  value="Male" required>Male</option>
                  <option  value="Female" required>Female</option>
    </select>    
  </div>
  <div class="col-md-12 mb-3">
    <label for="inputCity" class="form-label">No. of Workers</label>
    <input type="text" name="No_of_Workers" class="form-control" id="inputCity" placeholder="1" required>
  </div>
  <div class="col-md-12 mb-3">
    <label for="inputCity" class="form-label">Basic Salary (Convert in Peso)</label>
    <input type="text" name="Basic_Salary" class="form-control" id="inputCity" placeholder="₱20,000" required>
  </div>
  <div class="col-md-12 mb-3">
    <label for="inputCity" class="form-label">Slot Expiration Date</label>
    <input type="date" name="Slot_Expiration" class="form-control" id="inputCity" required>
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




