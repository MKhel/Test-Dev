@extends('layouts.apps')

@section('title')
Client Jobsite
@endsection
@section('content')

 <div class="card-body py-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2"> All Jobsite for {{$clientData->clients_name}}</h1>
        </div>
</div>

<div class="row mb-4">
  <div class="col-md-3">
    <div class="card">
      <div class="card-body">
      <img class="img-fluid" src="{{asset('images')}}/{{$clientData->file}}" height="100" width="100">
      </div>
      </div>
  </div>
  <div class="col-md-9">
      <div class="card">
          <div class="card-header">
          <div class="row mt-2">
            <div class="col-sm-6">
            <h3>Client Profile</h3>
            </div>
            <div class="col-sm-6 end-content">
              <p class="text-right">Valid until: {{$clientData->valid_until}}</p>
            </div>
          </div>
          </div>
          <div class="card-body">
          <div class="row mb-1">
            <div class="col-sm-6">
              <h5>Country</h5>
            </div>
            <div class="col-sm-6">
              <h5 style="color: grey;">{{$clientData->country}}</h5>
            </div>
          </div>
          <hr>
          <div class="row mb-1">
            <div class="col-sm-6">
              <h5>Jobsite</h5>
            </div>
            <div class="col-sm-6">
              <h5 style="color: grey;">{{$clientData->jobsite}}, {{$clientData->country}}</h5>
            </div>
          </div>
          <hr>
          <div class="row mb-1">
            <div class="col-sm-6">
              <h5>POEA Accreditation</h5>
            </div>
            <div class="col-sm-6">
              <h5 style="color: grey;">{{$clientData->poea_accredition}}</h5>
            </div>
          </div>
          <hr>
          <div class="row mb-1">
            <div class="col-sm-6">
              <h5>Expiration</h5>
            </div>
            <div class="col-sm-6">
              <h5 style="color: grey;">{{$clientData->valid_until}}</h5>
            </div>
          </div>
          <hr>
          <div class="row mb-1">
            <div class="col-sm-6">
              <h5>Status Remarks</h5>
            </div>
            <div class="col-sm-6">
              <h5 style="color: grey;"> Registered</h5>
            </div>
          </div>
          
        </div>
      </div>
    </div>
</div>

<div class="row mb-3">
  <div class="col-lg-6">
    <div class="content-section">
        <div class="card-header">
          <h3>Status</h3>
        </div>
        <div class="card-stat mt-3 mb-4 bg-success">
          
            <h5>Deployed Worker YTD <span class="badge badge-pill badge-success">{{$countJobOrder}}</span></h4>
        </div>
        <div class="card-stat mb-4 bg-warning">
          
            <h5>In-Process Workers <span class="badge badge-pill badge-warning">{{$countJobOrder}}</span></h4>
        </div>
        <div class="card-stat mb-4 bg-info">
            <h5>Open Job Orders <span class="badge badge-pill badge-info">{{$countJobOrder}}</span></h5>
        </div>
    </div>
  </div>  
  <div class="col-lg-6">
  <div class="content-section">
  <div class="card-header">
  <h3>In-Process Workers</h3>
  </div>

    <div class="row mt-4">
      <div class="col-sm-6 mb-4">
        <div class="card-stat bg-warning">
          <div class="card-stat-header">
            <h3>{{$total}}</h3> 
          </div>
          <h5>Total</h5>
        </div>
      </div>
      <div class="col-sm-6 mb-4">
        <div class="card-stat bg-danger">
          <div class="card-stat-header">
          <h3>{{$medical}}</h3>
          </div>
          <h5>Medical</h5>
        </div>
      </div>
      <div class="col-sm-6 mb-4">
         <div class="card-stat bg-primary">
          <div class="card-stat-header">
          <h3>{{$visa}}</h3>
          </div>
          <h5>Visa</h5>
        </div>
      </div>
      <div class="col-sm-6 mb-4">
        <div class="card-stat bg-info">
          <div class="card-stat-header">
          <h3>{{$OEC}}</h3>
          </div>
          <h5>OEC</h5>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>

<div class="row mb-3">
  <div class="col-lg-12">
    <div class="card">
    <div class="card-header">
            <div class="card-actions float-right">
              <div class="dropdown">
                <a href=""></a>
              </div>
              
              <h3>Open Job Orders</h3>
            
            </div>
          </div>
        
          <div style="overflow-x:auto;">
          <table class="table">
        
            <thead>
              <tr>
                <th>Position</th>
                <th>Position</th>
                <th>Requirement</th>
                <th></th>
                <th>Lined Up</th>
                <th>Selected</th>
                <th>Signed JOL</th> 
              </tr>
            </thead>
            
            <tbody> 
                    <tr>
                      <td></td>
                      <td></td>
                      <td>Total</td>
                      <td>Open</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>

                    <tr>
                    
                    @foreach($appJobs as $JobOrders)
                      <td>{{$JobOrders->position}}</td>
                      <td>{{$JobOrders->position}}</td>
                      <td>{{$JobOrders->no_ofworker}}</td>
                      <td>{{$JobOrders->no_ofworker}}</td>
                    
                      
                      <td>{{$JobOrders->applicant_count}}</td>
                   
                      <td>{{$JobOrders->lined_up_count}}</td>
                      <td>{{$JobOrders->signed_jol_count}}</td>
        
                    </tr>
                    @endforeach
                    <tr> 

                   
                  
                   

                    </tr>
                    
                    
            </tbody>
          </table>
          </div>
    </div>
  </div>
</div>


      



<div class="row">
<div class="container-fluid">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Deployement Year to Date</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-light table-striped table-sm">
          <thead>
            <tr>
              <th></th>
              <th>January</th>
              <th>February</th>
              <th>March</th>
              <th>April</th>
              <th>May</th>
              <th>June</th>
              <th>July</th>
              <th>August</th>
              <th>September</th>
              <th>October</th>
              <th>November</th>
              <th>December</th>
            </tr>
          </thead>
          
          <tbody>
            <tr>
              <td scope="col">2020</td>
              <td scope="col">0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>2021</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>2022</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>2023</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>2024</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            
          </tbody>
        </table>
      </div>

<nav>
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>
</div>

@endsection
@section('footer')
 
@endsection



