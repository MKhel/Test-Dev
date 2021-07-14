@extends('layouts.apps')

@section('title')
Applicant List
@endsection

@section('content')
<div class="content-container">

<div class="row">
<div class="col-md-12 header-top-text mb-4">
        <div class="mt-4 ml-4 mb-3">
        <div class="col-sm-12">
        <h2>Applicant List</h2>

        {{ Breadcrumbs::render('applicants') }}
        </div>
        
        </div>
    <hr>
      
      
</div>

</div>
        <div class="row">
          <div class="col-lg-12">
            <div class="col-lg-12">
              <h4>Search Job</h4>
            </div>
           
              <div class="col-md-12">
            <form action="{{ route('web.search' ) }}" method="GET">
             
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
      <div style="overflow-x:auto;">
      
        <table class="table table-borderless" id="myTable" >
        
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Position</th>
                <th>In Process Status</th>
                <th>Job Application Status</th>
                <th></th>
              </tr>
            </thead>
            
            <tbody>
                    @foreach($applicantData as $appData)
                    <tr class="header">
                    <td>{{$appData->applicant_id}}</td>
                      <td>{{$appData->first_name}}</td>
                      <td>{{$appData->last_name}}</td>
                      <td>{{$appData->gender}}</td>
                      <td>{{$appData->age}}</td>
                      <td>{{$appData->position}} </td>
                      <td>@if ($appData->in_process_status == 'Medical') <span class="badge badge-danger">{{$appData->in_process_status}} </span>
                          @elseif ($appData->in_process_status == 'OEC') <span class="badge badge-secondary">{{$appData->in_process_status}} </span>
                          @elseif ($appData->in_process_status == 'Visa') <span class="badge badge-info">{{$appData->in_process_status}} </span>
                      @endif  
                    </td>
                      <td>
                      @if ($appData->job_application_status == 'Line Up') <span class="badge badge-success">{{$appData->job_application_status}} </span>
                          @elseif ($appData->job_application_status == 'Selected') <span class="badge badge-primary">{{$appData->job_application_status}} </span>
                          @elseif ($appData->job_application_status == 'Signed JOL') <span class="badge badge-warning">{{$appData->job_application_status}} </span>
                      @endif
                        
                      
                      <td>
                      @can('view', Auth::user())
                        <div class="action-btn">
                      <a class="btn-view" href="/client/{{$appData->clients_name}}">
                        <i class="fas fa-eye"></i>
                      </a>
                      </div>
                                   
                      <div class="action-btn ">
                      <a class="btn-edit" href="/applicant/{{$appData->applicant_id}}/edit">
                        <i class="fas fa-pencil-alt"></i>
                      </a>
                      </div>
                      <div class="action-btn ">
                      <form class="form-inline" action="/applicant/{{$appData->applicant_id}}" method="POST">
                        @csrf
                        @method("delete")
                        
                        <button type="submit" value="" class="btn-delete">
                        <i class="fas fa-trash"></i>
                        </button>
                        </form>
                        </div>
                      </td>
                      @endcan   
                    </tr>
                  @endforeach
              
            </tbody>
          </table>
          <span>
            
          </span>
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              {{ $applicantData->links() }}
            </ul>
          </nav>
      </div>
        </div>        
</div>


      <br><br>
@endsection
@section('footer')

@endsection
