<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\JobOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class client_data_controller extends Controller
{
    function testcount(){
        $id = "1";
        $pos_data = Applicant::where('client_id', "$id")->get()->unique('position');
        return $pos_data;
        
    }
    
    function getallposition(){
        $id = "2";
        $position_array = array();
        $position_data  = DB::table('applicants')->where('client_id', "$id")->get();
        //$position_data  = DB::table('applicants')->where('client_id', "$id")->pluck('job_application_status', 'position');
        $position_data = json_decode($position_data);
        
        //$pos_data = array($position_data);
        //$pos_array = array_count_values($position_data);
        
        //return $position_data;
        if( ! empty($position_data)) {
            foreach ($position_data as $positionData) {
                $jobstat = $positionData->job_application_status;
                $pos_data = $positionData->position;
                //$datacount = array_count_values($positionData);
                $position_array[$pos_data]= $jobstat;
            }
                
        }
        //return $position_array;

        //return $this->getstatuspositiondata();
            
    // }
    // function getcountposition($pos_data) {
       
        $Lined_up = DB::table('applicants')->where('position', "$pos_data")->where('job_application_status', "Line Up")->get()->count();
        $Selected = DB::table('applicants')->where('position', "$pos_data")->where('job_application_status', "Selected")->get()->count();
        $Signed_JOL = DB::table('applicants')->where('position', "$pos_data")->where('job_application_status', "Signed JOL")->get()->count();
        $post_count = array($Lined_up, $Selected, $Signed_JOL);
        //$post_count = DB::table('applicants')->where('client_id', "$id")->where('position', "$pos_data")->get()->count();
        //$post_count = DB::table('applicants')->where('client_id', $id)->where('position', "$pos_data")->get()->count();
        //$post_count = DB::table('applicants')->where('position', "$pos_data")->where('job_application_status', "$jobstat")->get()->count();

    //     return $post_count;
    // }
    
    // function getstatuspositiondata() {
        // $position_count_array = array();
        // $position_array = $this->getallposition();
        // $position_stat_array = array();
        // if(! empty( $position_array )) {
        //     foreach ($position_array as $position_data=>$jobstat){
        //         $position_count_stat = $this->getcountposition($position_data);
        //         array_push($position_count_array, $position_count_stat);
        //         array_push($position_stat_array, $jobstat);
        //     }
        // }

        $position_count_array = array();
        $position_stat_array = array();
        if(! empty( $position_array )) {
            foreach ($position_array as $position_data=>$jobstat){
                $position_count_stat = $post_count;
                array_push($position_count_array, $position_count_stat);
                array_push($position_stat_array, $jobstat);
            }
        }
        //$pos_data = $this->testcount();

    
        //$pos_data = DB::table('applicants')->where('job_application_status', $position_stat_array)->get('position');
        //return $position_array = $this->getallposition();
        //return view('table')->with('data', $position_count_array)->with('data', $pos_data);
        //print_r($pos_data->position);
        //return view('table')->with('count_data',$position_count_array)->with('data', $pos_data);
        //return view('table', compact('position_count_array', 'pos_data'));
        // $pos_array = array('position_count' => $position_count_array);
        // $pos_array = array(['count' => $position_count_array],['position' => $position_stat_array]);\
        // $pos_array = array(['count' => $position_count_array]);
        // return view('table', $pos_array);
        // return view('table')->with('pos', $position_count_array);
        // return view('table', ['pos_array'=>$position_count_array]);
         return $position_count_array;


        // $id = "1";
        // $position_array = array();
        // $position_data = DB::table('applicants')->where('client_id', "$id")->get();
        // $stat_array = array();
        // foreach ($position_data as $positionData) {
        //     //$jobstat = $positionData->job_application_status;
        //     $pos_data = $positionData->position;
        //    //$datacount = array_count_values($data);
        //     $position_array[$pos_data]= $pos_data;
        // }
        
        // $Lined_up = DB::table('applicants')->where('position', "$position_array")->where('job_application_status', "Line Up")->get()->count();
        // // $Selected = DB::table('applicants')->where('position', "$position_array")->where('job_application_status', "Selected")->get()->count();
        // // $Signed_JOL = DB::table('applicants')->where('position', "$position_array")->where('job_application_status', "Signed JOL")->get()->count();

        // // $status = array(['Line_Up'=> $Lined_up], [$Selected], [$Signed_JOL]);
        // $status = $Lined_up;
        // $status_array[$status] = $status; 
        // return $stat_array;
        // //return view('table', $Line_Up);
        
        
    }
}
