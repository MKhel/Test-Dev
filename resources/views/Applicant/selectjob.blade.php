@extends('layouts.apps')

@section('title')
Select Job Position
@endsection

@section('content')
<div class="row">
<div class="col-md-12 header-top-text">
    <div class="row header-text-content">
    <div class="col-md-8">
            <h2>Job Position Selection</h2>
            <p>Please select job position before add new applicant. </p>
        </div>
      <div class="col-md-4">
            <!--<form action="">
                <input type="text" placeholder="Search" class="searchBox">
                <button class="searchBtn"> <i class="fa fa-search"></i></button>
            </form>
            -->
        </div>
        
    </div>
      
       
</div>

</div>
<hr>
<div class="row">

        @foreach($JobPosition as $JO)

      <div class="col-lg-6">
        <div class="mb-4">
        <a href="/applicant/{{$JO->joborder_id}}" class="btn-cards" style="color:black;text-decoration: none; ">
            <div class="items">
                <div class="items-content">
                    <h4 class="heading-text">{{$JO->position}}</h4>
                    <button class="primary-btn">Apply Now</button>
                    <div class="item-details">
                        <span>
                        <i class="fas fa-th-large"></i>
                        {{$JO->actual_position}}
                        </span>
                        <span>
                        <i class="fas fa-map-marker-alt"></i>
                        {{$JO->jobsite}}
                        </span>
                        <span>
                        <i class="fas fa-building"></i>
                        {{$JO->clients_name}}
                        </span>
                    </div>
                </div>
            </div>
        </a>
        </div>
      </div>
        
        
        @endforeach
        
      

</div>

<br>
<br>
@endsection





@section('footer')

@endsection

