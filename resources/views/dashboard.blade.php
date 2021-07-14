@extends('layouts.apps')

@section('title')
Dashboard
@endsection

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          <button class="btn btn-light bg-white shadow-sm dropdown-toggle" >
          <span data-feather="calendar"></span>
            This week
            </button>
          </div>
          
          <button class="btn btn-primary shadow-sm" >
            <i class="fas fa-filter" ></i>
            </button>
          
            <button class="btn btn-primary shadow-sm" >
            <i class="fas fa-sync-alt"></i>
            </button>
          </button>
        </div>
</div>

<div class="row">
  <div class="col-lg-3 col-sm-6 col-md-6 mb-3 d-flex">
      <div class="card flex-fill acard">
      <a href="/client" class="btn-cards" style="color:black;text-decoration: none; ">
        <div class="card-body py-4">
          <div class="media">
            <div class="media-body">
              <h3 class="mb-2">{{$countClient}}</h3>
              <p class="mb-2">Active Clients</p>
              <div class="mb-0">
                <span class="badge bg-success">
                  <i class="percent-text"> +{{$percentClient}}% </i>
                </span>
                <span class="text-muted">
                  Since Last Week
                </span>
              </div>
            </div>
            <div class="activeclient d-inline-block ml-3">
              <div class="stat">
              <i class="fas fa-user-tie"></i>
              </div>
            </div>
          </div>  
        </div>
      </a>
      </div>
  </div>
  <div class="col-lg-3 col-sm-6 col-md-6 mb-3 d-flex">
      <div class="card flex-fill acard">
      <a href="/applicant_list" class="btn-cards" style="color:black;text-decoration: none; ">
        <div class="card-body py-4">
          <div class="media">
            <div class="media-body">
              <h3 class="mb-2">{{$countapplicant}}</h3>
              <p class="mb-2">Applicants</p>
              <div class="mb-0">
                <span class="badge bg-primary">
                  <i class="percent-text"> +{{$percentapplicant}}%</i>
                </span>
                <span class="text-muted">
                  Since Last Week
                </span>
              </div>
            </div>
            <div class="applicant d-inline-block ml-3">
              <div class="stat">
              <i class="fas fa-user-friends"></i>
              </div>
            </div>
          </div>  
        </div>
        </a>
      </div>
  </div>
  <div class="col-lg-3 col-sm-6 col-md-6 mb-3 d-flex">
      <div class="card flex-fill acard">
      <a href="/joborder" class="btn-cards" style="color:black;text-decoration: none; ">
        <div class="card-body py-4">
          <div class="media">
            <div class="media-body">
              <h3 class="mb-2">{{$countJobOrder}}</h3>
              <p class="mb-2"> Job Orders</p>
              <div class="mb-0">
                <span class="badge bg-danger">
                  <i class="percent-text"> +{{$percentJobOrder}}% </i>
                </span>
                <span class="text-muted">
                  Since Last Week
                </span>
              </div>
            </div>
            <div class="joborder d-inline-block ml-3">
              <div class="stat">
              <i class="fas fa-briefcase"></i>
              </div>
            </div>
          </div>  
        </div>
      </a>
      </div>
  </div>
  <div class="col-lg-3 col-sm-6 col-md-6 mb-3 d-flex">
      <div class="card flex-fill acard">
      <a href="/joborder" class="btn-cards" style="color:black;text-decoration: none; ">
        <div class="card-body py-4">
          <div class="media">
            <div class="media-body">
              <h3 class="mb-2">{{$countJobsite}}</h3>
              <p class="mb-2"> Jobsites</p>
              <div class="mb-0">
                <span class="badge bg-info">
                  <i class="percent-text"> +{{$percentJobsite}}% </i>
                </span>
                <span class="text-muted">
                  Since Last Week
                </span>
              </div>
            </div>
            <div class="joborder d-inline-block ml-3">
              <div class="stat">
              <i class="fas fa-globe"></i>
              </div>
            </div>
          </div>  
        </div>
      </a>
      </div>
  </div>
</div>    
<div class="row">
  <div class="col-12 col-lg-8 mb-3 d-flex">
      <div class="card flex-fill w-100">
        <div class="card-header">
          <div class="card-actions">
            
            <h5>Recent Activity</h5>
          </div>
        </div>
       
      </div>
  </div>
  <div class="col-12 col-lg-4 mb-3 d-flex">
    
      <div class="card flex-fill w-100">
        <div class="card-header">
          
            
            <h5>Active Clients</h5>
          
        </div>
        @foreach($clientData as $newclient)
         
              <div class="card-body">
               <!-- <div class="info">
                    <img width="60" height="60" class="float-right"src="{{asset('images')}}/{{$newclient->file}}">
                    <h4 name="client">{{$newclient->clients_name}}</h5>
                    <p >{{$newclient->poea_accredition}}</p>
                </div>-->
                <ul class="list-unstyled">
    <li class="media">
      <img src="{{asset('images')}}/{{$newclient->file}}" width="60" height="60" class="mr-3" style="border-radius:50px;" alt="...">
      <div class="media-body">
        <h5 class="mt-0 mb-1">{{$newclient->clients_name}}</h5>
        <p>{{$newclient->poea_accredition}}</p>
      </div>
    </li>
    </ul>
              </div>
              
          @endforeach
      </div>
      
  </div>
</div>
<div class="row">
  <div class="col-12 col-lg-8 mb-3 d-flex">
  <div class="card flex-fill">
        <div class="card-body py-4">
          <div class="media">
            <div class="media-body">
              <h3 class="mb-2">50 </h3>
              <p class="mb-2">Deployment Year to Date</p>
              <div class="mb-0">
                <span class="badge bg-info">
                  <i class="percent-text"> +8.5% </i>
                </span>
                <span class="text-muted">
                  Since Last Week
                </span>
              </div>
            </div>
            <div class="jobsite d-inline-block ml-3">
              <div class="stat">
              <i class="fas fa-toolbox"></i>
              </div>
            </div>
          </div>  
        </div>
      </div>
  </div>
  <div class="col-12 col-lg-4 mb-3 d-flex">
  <div class="card flex-fill">
        <div class="card-body py-4">
          <div class="media">
            <div class="media-body">
              <h3 class="mb-2">50 </h3>
              <p class="mb-2">Jobsite</p>
              <div class="mb-0">
                <span class="badge bg-info">
                  <i class="percent-text"> +8.5% </i>
                </span>
                <span class="text-muted">
                  Since Last Week
                </span>
              </div>
            </div>
            <div class="jobsite d-inline-block ml-3">
              <div class="stat">
              <i class="fas fa-globe"></i>
              </div>
            </div>
          </div>  
        </div>
      </div>
  </div>
</div>

<div class="container">
        <!-- Area Chart Example-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> Analytics </div>
            <div class="card-body">
                <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at @php  echo date('F j, Y', time() ) @endphp</div>
        </div>
</div>

<div class="card flex-fill">
						<div class="card-header">
							<div class="card-actions float-right">
								<div class="dropdown">
									<a href="#" data-toggle="dropdown" data-display="static" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
        </a>

									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									</div>
								</div>
							</div>
							<h5 class="card-title mb-0">Department Report</h5>
						</div>
						<div id="datatables-dashboard-products_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="datatables-dashboard-products" class="table table-striped my-0 dataTable no-footer" role="grid" aria-describedby="datatables-dashboard-products_info">
							<thead>
								<tr role="row">
                  <th class="sorting" tabindex="0" aria-controls="datatables-dashboard-products" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Department</th>
                  <th class="d-none d-xl-table-cell sorting_desc" tabindex="0" aria-controls="datatables-dashboard-products" rowspan="1" colspan="1" aria-label="Tech: activate to sort column ascending" aria-sort="descending">Name</th>
                  <th class="d-none d-xl-table-cell sorting" tabindex="0" aria-controls="datatables-dashboard-products" rowspan="1" colspan="1" aria-label="License: activate to sort column ascending">Task</th>
                  <th class="d-none d-xl-table-cell sorting" tabindex="0" aria-controls="datatables-dashboard-products" rowspan="1" colspan="1" aria-label="Tickets: activate to sort column ascending">Date</th>
                  <th class="sorting" tabindex="0" aria-controls="datatables-dashboard-products" rowspan="1" colspan="1" aria-label="Sales: activate to sort column ascending">Status</th></tr>
							</thead>
							<tbody>
								
								
								
								
								
								
								
								
								
							<tr role="row" class="odd">
									<td class="">Recruitment</td>
									<td class="sorting_1">Juan Dela Cruz</td>
									<td class="d-none d-xl-table-cell">Add new applicants</td>
									<td class="d-none d-xl-table-cell">May 1, 2021</td>
									<td class="d-none d-xl-table-cell"><span class="badge badge-info">Done</span></td>
								</tr><tr role="row" class="even">
                <td class="">Processing</td>
									<td class="sorting_1">Jenny Dela Cruz</td>
									<td class="d-none d-xl-table-cell">Add new applicants</td>
									<td class="d-none d-xl-table-cell">May 1, 2021</td>
									<td class="d-none d-xl-table-cell"><span class="badge badge-warning">Pending</span></td>
								</tr><tr role="row" class="odd">
                <td class="">Processing</td>
									<td class="sorting_1">Jenny Dela Cruz</td>
									<td class="d-none d-xl-table-cell">Add new applicants</td>
									<td class="d-none d-xl-table-cell">May 1, 2021</td>
									<td class="d-none d-xl-table-cell"><span class="badge badge-warning">Pending</span></td>
								</tr><tr role="row" class="even">
                <td class="">Processing</td>
									<td class="sorting_1">Jenny Dela Cruz</td>
									<td class="d-none d-xl-table-cell">Add new applicants</td>
									<td class="d-none d-xl-table-cell">May 1, 2021</td>
									<td class="d-none d-xl-table-cell"><span class="badge badge-success">Success</span></td>
								</tr><tr role="row" class="odd">
                <td class="">Processing</td>
									<td class="sorting_1">Jenny Dela Cruz</td>
									<td class="d-none d-xl-table-cell">Add new applicants</td>
									<td class="d-none d-xl-table-cell">May 1, 2021</td>
									<td class="d-none d-xl-table-cell"><span class="badge badge-success">Success</span></td>
								</tr><tr role="row" class="even">
                <td class="">Processing</td>
									<td class="sorting_1">Jenny Dela Cruz</td>
									<td class="d-none d-xl-table-cell">Add new applicants</td>
									<td class="d-none d-xl-table-cell">May 1, 2021</td>
									<td class="d-none d-xl-table-cell"><span class="badge badge-info">Done</span></td>
								</tr></tbody>
						</table></div></div><div class="row">
              <div class="col-sm-12 col-md-5 mt-10">
                <div class="dataTables_info" id="datatables-dashboard-products_info" role="status" aria-live="polite">Showing 1 to 6 of 9 entries</div>
              </div><div class="col-sm-12 col-md-7 align-items-end"><div class="dataTables_paginate paging_simple_numbers" id="datatables-dashboard-products_paginate">
                <ul class="pagination">
                  <li class="paginate_button page-item previous disabled" id="datatables-dashboard-products_previous">
                  <a href="#" aria-controls="datatables-dashboard-products" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                  </li>
                  <li class="paginate_button page-item active">
                    <a href="#" aria-controls="datatables-dashboard-products" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                  </li><li class="paginate_button page-item "><a href="#" aria-controls="datatables-dashboard-products" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="datatables-dashboard-products_next"><a href="#" aria-controls="datatables-dashboard-products" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
					</div>
          



          <br>
          <br>
          <br>
@endsection




@section('footer')

@endsection

@section( 'scripts' )
    <script src="{{url( 'vendor/jquery.min.js' )}}"></script>

    <script src="{{url( 'vendor/Chart.min.js' )}}"></script>

    <script src="{{url( 'vendor/create-charts.js' )}}"></script>
@endsection