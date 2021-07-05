<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\client;
use App\Models\JobOrder;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class applicant_controller extends Controller
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
        

        $addApplicant = new Applicant();
        $addApplicant->first_name = $request->input('first_name');
        $addApplicant->last_name = $request->input('last_name');
        $addApplicant->gender = $request->input('gender');
        $addApplicant->age = $request->input('age');
        $addApplicant->position = $request->input('position');
        $addApplicant->client_id = $request->input('client_id');
        $addApplicant->joborder_id = $request->input('joborder_id');
        $addApplicant->in_process_status = $request->input('in_process_status');
        $addApplicant->job_application_status = $request->input('job_application_status');    
        $addApplicant->save();
            
       /* $addstatus = new JobOrder();
        $status = $request->input('job_application_status');
        if ($status == 'Lined up')
            $addstatus = DB::table('job_orders')->where('client_id', "$id")->insert(['lineup' => '1']);
        elseif ($status == 'selected')
            $addstatus = insert(['lineup' => '1']);
        elseif ($status == 'JOL')
            $addstatus = insert(['lineup' => '1']);
        else
            ($addstatus == 'asdad');
        $addstatus->save(); */
        //echo $request->input('client_name');

        
        return back()->with('client_added', 'New Applicant has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($joborder_id)
    {   
        $JobPosition = JobOrder::where("joborder_id", "LIKE", "$joborder_id")->get();
        /*$JobPosition = JobOrder::where("position", "LIKE", "$position")->get();*/
        return view('Applicant.addnew_applicant', compact('JobPosition'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $applicant = Applicant::where("applicant_id", "LIKE", "$id")->get();
        return view('Applicant.edit_applicant', compact('applicant'));
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
        $affected = DB::table('applicants')
              ->where('applicant_id', $id)
              ->update([
                'first_name'=>$request->first_name,
                    'last_name'=>$request->last_name,
                    'gender'=>$request->gender,
                    'age'=>$request->age,
                    'position'=>$request->position,
                    'client_id'=>$request->client_id,
                    'joborder_id'=>$request->joborder_id,
                    'in_process_status'=>$request->in_process_status,
                    'job_application_status'=>$request->job_application_status
              ]);
        // DB::table('applicants')->where('applicant_id', $request->$id)->update([
        //     'first_name'=>$request->first_name,
        //     'last_name'=>$request->last_name,
        //     'gender'=>$request->gender,
        //     'age'=>$request->age,
        //     'position'=>$request->position,
        //     'client_id'=>$request->client_id,
        //     'joborder_id'=>$request->joborder_id,
        //     'in_process_status'=>$request->in_process_status,
        //     'job_application_status'=>$request->job_application_status

        // ]);
        // $addApplicant = Applicant::find()->where('applicant_id', $applicant_id);
        // $addApplicant->first_name = $request->input('first_name');
        // $addApplicant->last_name = $request->input('last_name');
        // $addApplicant->gender = $request->input('gender');
        // $addApplicant->age = $request->input('age');
        // $addApplicant->position = $request->input('position');
        // $addApplicant->client_id = $request->input('client_id');
        // $addApplicant->joborder_id = $request->input('joborder_id');
        // $addApplicant->in_process_status = $request->input('in_process_status');
        // $addApplicant->job_application_status = $request->input('job_application_status');    
        // $addApplicant->save();
        return back()->with('applicant_update', 'Applicant updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detedata = DB::table('applicants')
                    ->where('applicant_id', $id)
                    ->delete();
        return back()->with('applicant_update', 'Applicant deleted sucessfully');
    }
}
