@extends('layouts.apps')

@section('title')
Add Active Client
@endsection

@section('content')
<div class="row">
<div class="col-md-12 header-top-text mb-3">
        <div class="mt-4 ml-4 mb-3">
        <div class="col-sm-8">
        <h2>Add New Client</h2>

        {{ Breadcrumbs::render('addclient') }}
        </div>
        
</div>
      
      
</div>

</div>
@if(Session::has('client_added'))
                <div class="alert alert-success" role="alert">
                      {{Session::get('client_added')}}
                </div>
            @endif


<div class="row mb-6">
  <div class="container-fuild">
      <div class="card flex-fill">
            
        <div class="card-body">
        <div class="row">
          
          <div class="col-lg-6 col-sm-12 col-md-12" style="padding: 30px;">
            <form action="/client" class="row g-3 needs-validation" method="POST" enctype="multipart/form-data">
              @csrf  
              
                
                
                
              <div class="col-md-12 mb-3">
                
                <label for="validationTooltip01" class="form-label">Client Name</label>
                <input type="text" class="form-control" id="validationTooltip01" name="Client_Name" required>
                <div class="valid-tooltip">
                Looks good!
                </div>
                </div>
              <div class="col-md-12 mb-3">
                
                <label for="validationTooltip01" class="form-label">Country</label>
                <input type="text" class="form-control" id="validationTooltip01" name="Country" required>
                <div class="valid-tooltip">
                Looks good!
                </div>  
              </div>
              <div class="col-md-12 mb-3">
                
                <label for="validationTooltip01" class="form-label">Jobsite</label>
                <input type="text" class="form-control" id="validationTooltip01" name="Jobsite" required>
                <div class="valid-tooltip">
                Looks good!
                </div>  
              </div>
              <div class="col-md-12 mb-3">
                
                <label for="validationTooltip01" class="form-label">Description</label>
                <input type="text" class="form-control" id="validationTooltip01" name="Description" required>
                <div class="valid-tooltip">
                Looks good!
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="inputjobsite" class="form-label">POEA Accreditation</label>
                <input type="text" class="form-control" name="POEA_Accreditation" required>
              </div>

              <div class="col-md-12 mb-3">
                <label for="inputCity" class="form-label">Valid Until</label>
                <input type="date" class="form-control" name="Valid_Until" placeholder="xxxx" required>
              </div>
              <div class="col-md-12 mb-3">
                <label for="inputCity" class="form-label">Upload File</label>
                <input type="file" class="form-control" name="File" placeholder="xxxx" id="inpFile" required>
                
              </div>
              
              <div class="col-md-12 mb-6">
                <div class="col-md-12 mb-3">
                <button type="submit" class="btn btn-success" >Submit</button>
                </div>             
              </div> 
              
            </form>
          </div>
          <div class="col-lg-6 col-sm-12 col-md-12 align-self-center d-flex justify-content-center">
              <div class="prev-container" id="prevContainer">
                <img id="previewImg" class="previewImg" alt="Image Preview" />
                <span class="prev-image-text">Image Preview</span>
              </div>
            </div>
        </div>
        </div>

            

    </div>
  </div>
</div>


@yield('scripts')

@endsection
