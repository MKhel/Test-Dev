@extends('layouts.apps')

@section('title')
Profile
@endsection

@section('content')
<div class="content-section">
  <div class="row">
      <div class="col-md-3">
          <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                  <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle" src="" alt="User Profile Picture">
                  </div>
                <h5 class="profile-username text-center admin_name">{{ Auth::user()->name }}</h5>
                <p class="text-muted text-center"> @if (Auth::user()->role == '1' ) <span >Admin</span>
                                    @elseif (Auth::user()->role == '2') <span >User</span>
                                    @endif </p>
                <input type="file" name="admin_image" id="admin_image" style="opacity: 0; height:1px;Display:none;"> 
                <a href="javascript:void(0)" class="btn btn-primary btn-block" id="change_picture_btn"><b>Change Profile</b></a> 
            </div> 
          </div>
      </div>

      <div class="col-md-9">
          <div class="card">
              <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="" data-toggle="tab">Personal Information</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Change Password</a></li>
                    </ul>

                    
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
@section('footer')

@endsection
