@extends('layouts.apps')

@section('title')
Active Client
@endsection

@section('content')
<div class="sub-container">
<div class="row">
<div class="col-md-12 header-top-text mb-4">

        <div class="mt-4 ml-4 mb-3">
      
        <h2>Client Selection</h2>
        <p>Please select client to add new joborder. </p>
        
        </div>
        
    <hr>
    <div class=" ml-4 ">
    {{ Breadcrumbs::render('clientselection') }}
    </div>
</div>

</div>

<div class="row">

      @foreach($clientData as $newclient) 

      <div class="col-lg-6">
        <div class="mb-4">
        <a href="/selectclient/{{$newclient->id}}" class="btn-cards" style="color:black;text-decoration: none; ">
            <div class="items">
                <div class="items-content">
                    <h4 class="heading-text">{{$newclient->clients_name}}</h4>
                    <button class="primary-btn">Select</button>
                    <div class="item-details">
                        <span>
                        <i class="fas fa-th-large"></i>
                        {{$newclient->descriptions}}
                        </span>
                        <span>
                        <i class="fas fa-map-marker-alt"></i>
                        {{$newclient->poea_accredition}}
                        </span>
                        
                    </div>
                </div>
            </div>
        </a>
        </div>
      </div>
        
        
        @endforeach
        
      

</div>
</div>
@endsection





@section('footer')

@endsection

