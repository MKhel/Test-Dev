@extends('layouts.apps')

@section('title')
Client Job Order
@endsection
<div class="container-fluid">
@section('content')<br>
<div class="card flex-fill">
        <div class="card-body py-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
        
              <h1 class="h2"> All Job Order for {{$clientname}}</h1>
        
        <div class="btn-toolbar mb-2">
          <div class="btn-group me-2">
            
                <p>Valid until: {{$validuntil}}</p>
                
            
          </div>
        </div>
      
</div>
      


<div class="row">
  
    <div class="col-12 col-lg-12 d-flex">
    
        <div class="card flex-fill w-100">
          <div class="card-header">
            <div class="card-actions float-right">
              <div class="dropdown">
                <a href=""></a>
              </div>
              
              <h5>Active Jobsite</h5>
            
            </div>
          </div>
          <div class="container">
          <div class="table-responsive">
          <table class="table table-sm">
        
            <thead>
              <tr>
                <th>Actual Position</th>
                <th>Position <br> <p style="color: gray; font-size:12px;">(as per VISA Category)</p></th>
                <th>Gender</th>
                <th>No. of Workers</th>
                <th>Basic Monthly Salary</th>
                <th></th>
              </tr>
            </thead>
            
            <tbody>
                  @foreach($clientJoborder as $jobsiteData)
                    <tr>
                      <td>{{$jobsiteData->actual_position}}</td>
                      <td>{{$jobsiteData->position}}</td>
                      <td>{{$jobsiteData->gender}}</td>
                      <td>{{$jobsiteData->no_ofworker}}</td>
                      <td>{{$jobsiteData->basic_salary}}</td>
                      
                      <div class="col-13 col-sm-4 d-flex">
                      <td>
                      <a class="show-modal btn btn-primary" href="/client/{{$jobsiteData->clients_name}}">
                        <i class="fas fa-eye"></i>
                      </a>
                      <a class="edit-modal btn btn-success" href="/client/{{$jobsiteData->id}}/edit">
                        <i class="fas fa-pencil-alt"></i>
                      </a>
                      <form class="form-inline" action="/client/{{$jobsiteData->id}}" method="POST">
                        @csrf
                        @method("delete")
                        
                        <button type="submit" value="" class="delete-modal btn btn-danger">
                        <i class="fas fa-trash"></i>
                        </button>
                        </form>
                      </td>
                      </div>
                    </tr>
                  @endforeach
              
            </tbody>
          </table>
          </div>
          </div>
        </div>
        
    </div>
</div>
</div>
</div>
@endsection



@section('footer')
 
@endsection
