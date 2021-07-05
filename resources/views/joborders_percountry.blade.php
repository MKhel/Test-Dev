@extends('layouts.apps')

@section('title')
Dashboard
@endsection

@section('content')

<div class="card flex-fill">
								<div class="card-header">
									<div class="card-actions float-right">
										<div class="dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
            </a>

											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Traffic</h5>
								</div>
								<div id="datatables-dashboard-traffic_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="datatables-dashboard-traffic" class="table table-striped my-0 dataTable no-footer" role="grid" aria-describedby="datatables-dashboard-traffic_info">
									<thead>
										<tr role="row"><th class="sorting" tabindex="0" aria-controls="datatables-dashboard-traffic" rowspan="1" colspan="1" aria-label="Source: activate to sort column ascending">Source</th><th class="text-right sorting_desc" tabindex="0" aria-controls="datatables-dashboard-traffic" rowspan="1" colspan="1" aria-sort="descending" aria-label="Users: activate to sort column ascending">Users</th><th class="d-none d-xl-table-cell text-right sorting" tabindex="0" aria-controls="datatables-dashboard-traffic" rowspan="1" colspan="1" aria-label="Sessions: activate to sort column ascending">Sessions</th><th class="d-none d-xl-table-cell text-right sorting" tabindex="0" aria-controls="datatables-dashboard-traffic" rowspan="1" colspan="1" aria-label="Bounce Rate: activate to sort column ascending">Bounce Rate</th><th class="d-none d-xl-table-cell text-right sorting" tabindex="0" aria-controls="datatables-dashboard-traffic" rowspan="1" colspan="1" aria-label="Avg. Session Duration: activate to sort column ascending">Avg. Session Duration</th></tr>
									</thead>
									<tbody>

                        <div class="table-responsive">
                        <table class="table table-light table-striped table-sm">
                          <thead>
                            <tr>
                              <th>POEA Position</th>
                              <th>Visa Position</th>
                              <th>No. of Slots</th>
                              <th>Basic Salary</th>
                              <th>No. Deployed</th>
                              <th>Slot Expiration</th>
                              <th>Date</th>
                            </tr>
                          </thead>
                          
                          <tbody>
                          @foreach($clientData as $jobdata)
                            <tr>
                              
                              <td>{{$jobdata->poea_position}}</td>
                              <td>{{$jobdata->visa_position}}</td>
                              <td>{{$jobdata->number_slot}}</td>
                              <td>{{$jobdata->basic_salary}}</td>
                              <td>{{$jobdata->number_deployed}}</td>
                              <td>{{$jobdata->slot_expiration}}</td>
                              
                            </tr>
                            @endforeach
                            
                          </tbody>
                        </table>
                      </div>
                      {{$clientData->links('bootstrap-4')}}

	
									<tr role="row" class="odd">
											<td>Google</td>
											<td class="text-right sorting_1">1023</td>
											<td class="d-none d-xl-table-cell text-right">1265</td>
											<td class="d-none d-xl-table-cell text-right text-success">27.23%</td>
											<td class="d-none d-xl-table-cell text-right">00:06:25</td>
										</tr><tr role="row" class="even">
											<td>Direct</td>
											<td class="text-right sorting_1">872</td>
											<td class="d-none d-xl-table-cell text-right">1077</td>
											<td class="d-none d-xl-table-cell text-right text-success">32.70%</td>
											<td class="d-none d-xl-table-cell text-right">00:09:18</td>
										</tr><tr role="row" class="odd">
											<td>Facebook</td>
											<td class="text-right sorting_1">812</td>
											<td class="d-none d-xl-table-cell text-right">1003</td>
											<td class="d-none d-xl-table-cell text-right text-success">24.83%</td>
											<td class="d-none d-xl-table-cell text-right">00:05:56</td>
										</tr><tr role="row" class="even">
											<td>GitHub</td>
											<td class="text-right sorting_1">713</td>
											<td class="d-none d-xl-table-cell text-right">881</td>
											<td class="d-none d-xl-table-cell text-right text-success">38.09%</td>
											<td class="d-none d-xl-table-cell text-right">00:06:19</td>
										</tr><tr role="row" class="odd">
											<td>DuckDuckGo</td>
											<td class="text-right sorting_1">693</td>
											<td class="d-none d-xl-table-cell text-right">856</td>
											<td class="d-none d-xl-table-cell text-right text-success">37.36%</td>
											<td class="d-none d-xl-table-cell text-right">00:09:12</td>
										</tr><tr role="row" class="even">
											<td>Pinterest</td>
											<td class="text-right sorting_1">623</td>
											<td class="d-none d-xl-table-cell text-right">770</td>
											<td class="d-none d-xl-table-cell text-right text-danger">52.81%</td>
											<td class="d-none d-xl-table-cell text-right">00:03:10</td>
										</tr><tr role="row" class="odd">
											<td>Bing</td>
											<td class="text-right sorting_1">504</td>
											<td class="d-none d-xl-table-cell text-right">623</td>
											<td class="d-none d-xl-table-cell text-right text-danger">66.76%</td>
											<td class="d-none d-xl-table-cell text-right">00:04:42</td>
										</tr><tr role="row" class="even">
											<td>Twitter</td>
											<td class="text-right sorting_1">462</td>
											<td class="d-none d-xl-table-cell text-right">571</td>
											<td class="d-none d-xl-table-cell text-right text-success">31.53%</td>
											<td class="d-none d-xl-table-cell text-right">00:08:05</td>
										</tr></tbody>
								</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="datatables-dashboard-traffic_info" role="status" aria-live="polite">Showing 1 to 8 of 8 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="datatables-dashboard-traffic_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatables-dashboard-traffic_previous"><a href="#" aria-controls="datatables-dashboard-traffic" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatables-dashboard-traffic" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="datatables-dashboard-traffic_next"><a href="#" aria-controls="datatables-dashboard-traffic" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
							</div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Qatar</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-light table-striped table-sm">
          <thead>
            <tr>
              <th>POEA Position</th>
              <th>Visa Position</th>
              <th>No. of Slots</th>
              <th>Basic Salary</th>
              <th>No. Deployed</th>
              <th>Slot Expiration</th>
              <th>Date</th>
            </tr>
          </thead>
          
          <tbody>
          @foreach($clientData as $jobdata)
            <tr>
              
              <td>{{$jobdata->poea_position}}</td>
              <td>{{$jobdata->visa_position}}</td>
              <td>{{$jobdata->number_slot}}</td>
              <td>{{$jobdata->basic_salary}}</td>
              <td>{{$jobdata->number_deployed}}</td>
              <td>{{$jobdata->slot_expiration}}</td>
              
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
      {{$clientData->links('bootstrap-4')}}

@endsection



@section('footer')
 
@endsection