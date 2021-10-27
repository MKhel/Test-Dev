<?php

namespace App\Http\Controllers;

use App\Models\activeclient;
use App\Models\Applicant;
use App\Models\client;
use App\Models\JobOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function dashboard(){
        $clientData = client::all();
        return view('dashboard', compact('clientData'));            
        //echo view('activeclient');
    	
    }
    // Clients
    public function active_client(){
    	return view('activeclient');
    }
    public function selectclient (){
        $clientData = client::all();
    	return view('Client.selectclient', compact('clientData'));
    }
    public function deployment(){
    	return view('deployment');
    }
    public function addclient(){
    	return view('addclient');
    }
    public function joborders_percountry(){
        $clientData = client::all();
        return view('joborders_percountry', compact('clientData'));
    
    }
    public function client_jobsite(){
    	return view('client_jobsite');
    }
    
    // Applicants
    public function applicant_list(){
        $applicantData = Applicant::all();
    	return view('Applicant.applicant_list', compact('applicantData'));
    }
    public function add_applicant(){
        $JobPosition = JobOrder::all();
        return view('Applicant.selectjob', compact('JobPosition'));
    }
    // JobOrders   
    public function add_JO($id){
        $clientData = client::find($id);
        $clientID = $clientData->id;
        return view('JobOrders.add_joborder', compact('clientData', 'clientID'));
        //$clientData = activeclient::where("id", "LIKE", "$id")->get();
    	//return view('add_joborder');
        
    }
    public function add_joborder(){
    	return view('add_joborder');
    }
    
    

    public function test(){
        
        // $appJobs = JobOrder::withCount(['applicant', 'applicant', 'client' => function ($query){
        //     $query->where('job_application_status', 'Line Up');
        // }])->get();
        // $appJobs = Applicant::where('client_id', 1)->withCount(['applicant', 'applicant' => function ($query){
        //     $query->where('job_application_status', 'Line Up')->get();
        // }])->get();
        //$appJobs = Applicant::withCount(['applicant', 'applicant_linedup'])->get();
        $id = 3;
        $appJobs = JobOrder::where('client_id', $id)->withCount(['applicant','lined_up', 'signed_jol' => function() {
        
        }])->get();
        
        return $appJobs;
        
        foreach ($appJobs as $job) {
                echo $job->count();
                echo $job->position;
                echo $job->applicant_count;
                echo $job->lined_up_count;
                echo $job->signed_jol_count;
                
        }
    }
    public function profile(){
    	return view('Profile.user_profile');
    }


    
}
