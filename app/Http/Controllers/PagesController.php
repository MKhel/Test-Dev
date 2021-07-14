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
        $clientData = activeclient::all();
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
        $applicantData = Applicant::paginate(5);
    	return view('Applicant.applicant_list', compact('applicantData'));
    }
    public function add_applicant(){
        $JobPosition = JobOrder::all();
        return view('Applicant.selectjob', compact('JobPosition'));
    }
    // JobOrders   
    public function add_JO($id){
        $clientData = activeclient::find($id);
        $clientID = $clientData->id;
        return view('JobOrders.add_joborder', compact('clientData', 'clientID'));
        //$clientData = activeclient::where("id", "LIKE", "$id")->get();
    	//return view('add_joborder');
        
    }
    public function add_joborder(){
    	return view('add_joborder');
    }
    
    

    public function test(){
        $clientData = DB::table("clients")
                    ->where("clients_name", "=", "tech")->get();
        return $clientData;
    	//return view('client_jobsite', compact('clientData'));;
    }
    public function profile(){
    	return view('Profile.user_profile');
    }


    
}
