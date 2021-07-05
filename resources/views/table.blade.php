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
          </div>
        <div class="table-container">
          <table class="table bg-white">
        
            <thead>
              <tr>
                
                <th>Position</th>
                <th>Line Up</th>
                <th>Selected</th>
                <th>Signed JOL</th>
                
              </tr>
            </thead>
            
            <tbody>


           

            
                <tr>
                
                @foreach($data as $count_datas)
                    
                    @endforeach
                  
                   

                    @foreach($count_data as $data_count)
                    <td>{{$count_datas->position}}</td> 
                    <td>{{$data_count[0]}}</td>
                    <td>{{$data_count[1]}}</td>
                    <td>{{$data_count[2]}}</td>
                   
                 
                        
                </tr>         
                @endforeach 
                
                
           

            
              

            
        
            </tbody>
          </table>
        
          </div>
@endsection
@section('footer')

@endsection
