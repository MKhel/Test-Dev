@extends('layouts.app')

@section('title')
Test Tab
@endsection

@section('content')
<div class="row">
						<div class="col-xl-6">
							<div class="card">
								<div class="card-body">
									<h4 class="mt-0 header-title mb-4">Latest Projects</h4>
									<div class="container" style="overflow-x:auto;">
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
											<thead>
												<tr>
                          							<th scope="col">Position</th>
													<th scope="col">Line-Up</th>
													<th scope="col">Selected</th>
													<th scope="col">Signed_JOL</th>
                          							<th scope="col">Report</th>
													<th scope="col">Status</th>
												</tr>
											</thead>
											<tbody>
												<!-- start 1 -->
												@foreach($applicant as $appData)
												<tr> 
													
													<td>{{ $appData->position}}</td>
													
													
													
													
													<td><span class="badge badge-warning">Delete Applicant</span></td>
                          							<td><span class="badge badge-primary">Success</span></td>
													  
												</tr>
												@endforeach  
												<!-- end 1 -->
												
												
												
											</tbody>
                      <tfoot>
                          <tr>
                              <th>ID</th>
                              <th>Department</th>
                              <th>Name</th>
                              <th>Date</th>
                              <th>Report</th>
                              <th>Status</th>
                          </tr>
                      </tfoot>  
										</table>
									</div>
            
            


@endsection
@section('footer')

@endsection
