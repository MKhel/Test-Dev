@extends('layouts.apps')

@section('title')
Active Client
@endsection

@section('content')
<div class="row">
<div class="col-md-12 header-top-text mb-4">
        <div class="mt-4 ml-4 mb-3">
        <div class="col-sm-8">
        <h2>Active Clients</h2>

        {{ Breadcrumbs::render('client') }}
        </div>
        
        </div>
    <hr>
      
      
</div>

</div>

<div class="row">
  
    
      
        @foreach($clientData as $newclient)
       
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <a href="/activeclients/{{$newclient->id}}" class="btn-cards" style="color:black;text-decoration: none; ">
              <div class="card cards acard">
              
                <div class="card-body">
                <img height="120" width="120" style="max-height: 120px; max-width: 120px;padding:20px; float:right; position:block;" src="{{asset('images')}}/{{$newclient->file}}">
                  <h5 class="card-title" name="client">{{$newclient->clients_name}}</h5>
                  <p class="card-text" >{{$newclient->descriptions}}</p>
                  <p class="card-text" >{{$newclient->poea_accredition}}</p>
                  <button href="/activeclients/{{$newclient->id}}" class="btn-all">View</button>
                </div>
                
              </div><br>
            </a>  
            

        </div>
<!-- 
        <div class="col-lg-12">
          <div class="card-container">
              
            <div class="card-content">
         
                  <div class="card-image">
                    <div class="image-box">
                      <h1>H</h1>
                    </div>
                  </div>

    
                  <div class="card_header">
                  <h5>Header</h5>
                  <p>This the content</p>
                  </div>

                  <div class="card_btn_container">
                  <button href="/activeclients/{{$newclient->id}}" class="btn-all">View</button>
                  </div>
                 
                  
          
              </div>
               
            </div>
               
          </div> -->
        
        
        @endforeach
        
</div>
@endsection
@section('footer')

@endsection
