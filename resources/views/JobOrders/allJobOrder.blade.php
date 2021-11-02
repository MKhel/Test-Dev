@extends('layouts.apps')

@section('title')
Client Job Order
@endsection

@section('content')
<div class="sub-container">
<div class="content-container">

<div class="row">
<div class="col-md-12 header-top-text mb-4">
        <div class="mt-4 ml-4 mb-3">
        <div class="col-sm-12">
        <h2>Job Orders for All Clients</h2>

        {{ Breadcrumbs::render('joborders') }}
        </div>
        
        </div>
    <hr>
      
      
</div>

</div>
        <div class="row">
          
            <div class="col-lg-12">
              <h4>Search Job</h4>
           
           
            
              <form class="example" action="{{ route('web.search' ) }}" method="GET">
              <input type="text"  placeholder="Keyword e.g Job Title" name="query">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            </div>
            
            
          </div>
     
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
                           
                  @elseif(count($jobs) < 0)
                  @foreach($clientjoborder as $alljob)
                          <tr>
                            <td>{{$alljob->joborder_id}}</td>
                            <td>{{$alljob->position}}</td>
                            <td>{{$alljob->jobsite }}</td>
                            <td>{{$alljob->basic_salary}}</td>
                          </tr>
                    @endforeach  
                  
                  @else
                    

                    <tr>
                     <td > No result found!</td>
                  </tr>
                  @endif


              
              </tbody>

           
                    
            </table>
            
            <div class="pagination-block">
              {{ $jobs->links('layouts.paginationlinks') }}
            </div>
            @endif

            
        </div>
</div> 
</div>
@endsection
@section('footer')

@endsection
