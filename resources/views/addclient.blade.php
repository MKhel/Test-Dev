@extends('layouts.apps')

@section('title')
Add Active Client
@endsection

@section('content')
<div class="container-fuild">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Active Client</h1>
</div>
<div class="row">
    <div class="col-12 col-sm-6 col-md d-flex">
      <div class="card flex-fill">
            <div class="card-body py-4">
            <form action="/client" class="row g-3 needs-validation" method="POST" novalidate>
              @csrf  
              <div class="col-md-12">
                    <h3>Add New Client</h3>
              </div>
              
                
                
                
 
              
              <div class="col-md-12">
                <label for="inputDescription" class="form-label">Client Name</label>
                <select name="client_name" class="custom-select" >
                    
                  @foreach($clientData as $clientdata)
                  <option  value="{{$clientdata->clients_name}}" require>{{$clientdata->clients_name}}</option>
                  @endforeach
                </select>   
              </div>
              <div class="col-md-12 position-relative">
                
                <label for="validationTooltip01" class="form-label">Description</label>
                <input type="text" class="form-control" id="validationTooltip01" name="description" required>
                <div class="valid-tooltip">
                Looks good!
                </div>
                </div>
              <div class="col-md-12">
                <label for="inputjobsite" class="form-label">POEA Accreditation</label>
                <input type="text" class="form-control" name="POEA_accreditation" required>
              </div>
              
              <div class="col-sm-12">
                <div class="col-sn-12">
                <button type="submit" class="btn btn-success" >Submit</button>
                </div>             
              </div> 
              
            </form>
           </div>
      </div>
    </div>
</div>
</div>
<div class="row">
<div class="container">
<div class="col-12 col-sm-6 col-md d-flex">
      <div class="card flex-fill">
        <div class="card-body py-4">
        <form action="/addclient/create" class="row g-3 needs-validation" method="POST" novalidate>
          @csrf  
          <div class="col-md-12">
                <h3>Add Job Orders</h3>
            </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">POEA Position</label>
            <input type="text" class="form-control" name="POEA_position" placeholder="xxxx" required>
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Visa Position</label>
            <input type="text" class="form-control" name="Visa_position" placeholder="xxxx" required>
          </div>
          <div class="col-md-12">
            <label for="inputCity" class="form-label">No. of Slots</label>
            <input type="text" class="form-control" name="Number_slot" placeholder="xxxx" required>
          </div>
          <div class="col-md-12">
            <label for="inputCity" class="form-label">Basic Salary</label>
            <input type="text" class="form-control" name="Basic_salary" placeholder="xxxx" required>
          </div>
          <div class="col-md-12">
            <label for="inputCity" class="form-label">No. Deployed</label>
            <input type="number" class="form-control" name="Number_deployed" placeholder="xxxx" required>
          </div>
          <div class="col-md-12">
            <label for="inputCity" class="form-label">Slot Expiration Date</label>
            <input type="date" class="form-control" name="Slot_expiration" placeholder="xxxx" required>
          </div>

          <div class="col-12">
            <button type="submit" class="btn btn-success" >Submit</button>
          </div>
        </form>
      </div>
</div>


@show
@yield('footer')
@endsection
</div>
</div>