<?php

namespace App\Http\Controllers;

use App\Models\activeclient;
use App\Models\Applicant;
use App\Models\client;
use App\Models\JobOrder;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\JobName;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientJoborder = JobOrder::all();
        return view('Client.allJobOrder', compact('clientJoborder'));
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
       
        
        $clientData = new JobOrder();
        $clientData->client_id = $request->input('Client_id');
        $clientData->clients_name = $request->input('Client_Name');
        $clientData->country = $request->input('Country');
        $clientData->jobsite = $request->input('Jobsite');
        $clientData->poea_accredition = $request->input('POEA_Accreditation');
        $clientData->actual_position = $request->input('Actual_Position');
        $clientData->position = $request->input('Position');
        $clientData->gender = $request->input('Gender');
        $clientData->no_ofworker = $request->input('No_of_Workers');
        $clientData->basic_salary = $request->input('Basic_Salary');
        $clientData->slot_expiration = $request->input('Slot_Expiration');
        $clientData->save();
        //echo $request->input('client_name');

        
        return back()->with('client_added', 'New joborder has been added');
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
        $JobOrder = JobOrder::where("client_id", "LIKE", "$id")->get();
        
        return view('client_jobsite', compact('clientData', 'countJobOrder', 'JobOrder'));
         
        
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $JobOrderData = JobOrder::find($id);
        $JobOrderData->delete();
        return view('Client.allJobOrder');
    }
}
