<?php

namespace App\Http\Controllers;
use App\Models\activeclient;
use App\Models\Applicant;
use App\Models\JobOrder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class active_client extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientData = activeclient::find($id);
        $countJobOrder = DB::table('job_orders')->where('client_id', 'LIKE', "$id")->count();
        //$JobOrder = JobOrder::where("client_id", "LIKE", "$id")->get();
        $medical = DB::table('applicants')->where('client_id', 'LIKE', "$id")->where('in_process_status', 'LIKE', 'Medical')->count();
        $visa = DB::table('applicants')->where('client_id', 'LIKE', "$id")->where('in_process_status', 'LIKE', 'Visa')->count();
        $OEC = DB::table('applicants')->where('client_id', 'LIKE', "$id")->where('in_process_status', 'LIKE', 'OEC')->count();
        $linedup = DB::table('applicants')->where('client_id', 'LIKE', "$id")->where('position', 'LIKE', 'position')->count();
        $total = $medical + $OEC + $visa;
        $appcount = Applicant::where('client_id',"$id");
        $getposition = Applicant::where('client_id', "$id")->get('position' , 'job_application_status');
        // $JobOrder = Applicant::select(['status'])
        //         ->withCount(['joborders' => function($query) {
        //             $query->whereHas('status', function ($query) {
        //                 $query->where('client_id', 1);
        //         });
        //     }])
        // ->get();
        // $status = Applicant::withCount(['status'])->get();
        // dd($status);


        $posts = Applicant::withCount(['status' => function (Builder $query) {
            $query->where('clients_id', 'like', 1);
        }])->get();

        // echo $posts[0]->status_count;
        // echo $posts[0]->status_count;
    //     return view('client_jobsite', compact('clientData', 'countJobOrder', 'JobOrder', 'medical', 'visa', 'OEC', 'linedup', 'total', 'appcount', 'getposition'));
        
         return $this->getallposition($id);//->compact('clientData', 'countJobOrder', 'JobOrder', 'medical', 'visa', 'OEC', 'linedup', 'total', 'appcount', 'getposition'));
        }
            function getallposition($id){
            $position_array = array();
            $position_data  = DB::table('applicants')->where('client_id', "$id")->get();
            $position_data = json_decode($position_data);
                
                if( ! empty($position_data)) {
                foreach ($position_data as $positionData) {
                    $jobstat = $positionData->job_application_status;
                    $pos_data = $positionData->position;
                    $position_array[$pos_data]= $jobstat;
                    }
                }
                function getcountposition($pos_data) {
            
                    $Lined_up = DB::table('applicants')->where('position', "$pos_data")->where('job_application_status', "Line Up")->get()->count();
                    $Selected = DB::table('applicants')->where('position', "$pos_data")->where('job_application_status', "Selected")->get()->count();
                    $Signed_JOL = DB::table('applicants')->where('position', "$pos_data")->where('job_application_status', "Signed JOL")->get()->count();
                    $post_count = array($Lined_up, $Selected, $Signed_JOL);
                    //return $post_count;
                    return $this->getstatuspositiondata()->with($post_count);
                    }
                    function getstatuspositiondata() {
                        $position_count_array = array();
                        $position_array = $this->getallposition();
                        $position_array = $position_array;
                        $position_stat_array = array();
                        if(! empty( $position_array )) {
                            foreach ($position_array as $position_data=>$jobstat){
                                $position_count_stat = getcountposition($position_data);
                                array_push($position_count_array, $position_count_stat);
                                array_push($position_stat_array, $jobstat);
                            }
                        }    
                    
                        $pos_data = DB::table('applicants')->where('job_application_status', $position_stat_array)->get('position');
            
                        print_r($pos_data);
            
                        //return view('table')->with('count_data',$position_count_array)->with('data', $pos_data);
                        //return view('client_jobsite', compact('clientData', 'countJobOrder', 'JobOrder', 'medical', 'visa', 'OEC', 'linedup', 'total', 'appcount', 'getposition'));
                    }
                }
        }   
            
               
    }            
               
           
        
        
        
    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function destroy($id)
    {
        //
    }


}