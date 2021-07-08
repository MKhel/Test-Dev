@extends('layouts.apps')

@section('title')
Client Job Order
@endsection

@section('content')

<div class="content-container">
          <div class="col-md-12">
                <div class="mt-4 ml-4 mb-3">
                <h2> Job Orders for All Clients
                </h2>
                <p></p>
                
                </div>
                    
        </div>
        <div class="row">
          <div class="col-lg-12">
            <h4>Search Job</h4>
  
            <form action="{{ route('web.search' ) }}" method="GET">
             
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="text" class="form-control" name="query" placeholder="Keyword e.g Job Title, Description">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <button type="submit" class="primary-btn">Search</button>
                </div>
              </div>
              
            </form>
 
            <br>
            <br>
            <div style="overflow-x:auto;">
            @if(isset($jobs))
            
            <table class="table table-hover">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Position</th>
                      <th>Jobsite</th>
                      <th>Salary</th>
                  </tr>
              </thead>
              <tbody>
                  @if(count($jobs) > 0)
                    @foreach($jobs as $job)
                    <tr>
                      <td>{{$job->joborder_id}}</td>
                      <td>{{$job->position}}</td>
                      <td>{{$job->jobsite }}</td>
                      <td>{{$job->basic_salary}}</td>
                    </tr>
                    @endforeach
                  @else
                  
                  <tr>
                     <td > No result found!</td>
                  </tr>

                  @endif
              </tbody>
            </table>
            
            <div class="pagintion-block">
              {{ $jobs->links('layouts.paginationlinks') }}
            </div>
            @endif
            </div> 
          </div>
        </div>        
</div>
@endsection
@section('footer')

@endsection
