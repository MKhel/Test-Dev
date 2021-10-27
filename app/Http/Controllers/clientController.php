<?php

namespace App\Http\Controllers;

use App\Models\activeclient;
use App\Models\client;
use App\Models\JobOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Cloner\Data;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientData = client::all();
        return view('Client.activeclient', compact('clientData'));

        //echo view('activecl ient');
    }
    public function jobsite()
    {
        $clientData = client::all();
        return view('joborders_percountry', compact('clientData'));            
        //echo view('activeclient');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view('addclient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'File' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        /**if($request->hasFile('File')){
            $filenameWithExt = $request->file('File')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('File')->getClientOriginalExtension();
            $fileNameToStore = $filename. '-' . time(). '.' .$extension;
            $path = $request->file('File')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        */
        $files = $request->file('File');
        $fileName = time().'.'.$files->extension();
        $files->move(public_path('images'),$fileName);

        $clientData = new client();
        $clientData->clients_name = $request->input('Client_Name');
        $clientData->country = $request->input('Country');
        $clientData->jobsite = $request->input('Jobsite');
        $clientData->descriptions = $request->input('Description');
        $clientData->poea_accredition = $request->input('POEA_Accreditation');
        $clientData->valid_until = $request->input('Valid_Until');
        $clientData->file = $fileName;
        $clientData->save();
        
        //echo $request->input('client_name');
        $value = $request->session()->get('key'. 'value');
        
        //return redirect()->back();
        
        return back()->with('client_added', 'New client has been inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($clients_name)
    {   
    
        $clientJoborder = JobOrder::where("clients_name", "LIKE", "$clients_name")->get();
        $clientname = $clients_name;
        $validuntil = client::where("clients_name", "LIKE", "$clients_name")->value("valid_until");    
        return view('Client.client_joborder', compact('clientJoborder', 'clientname', 'validuntil'));
        //return $clientData;
        
        //$clientData = client::find($id);
        //return view('client_jobsite')->with("clientData", $clientData);

        //$clientData = client::find($id);
      //return view('client_jobsite', compact('clientData'));
  
            //$clientData = client::where('jobsite', $id)->get();
            //return view('client_jobsite')->with('clientData', $clientData);
        
  
    //$clientData = client::where('clients_name','client')->get();
      //return view('client_jobsite', ['clientData' => $clientData]);
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
     * @param  \Illuminate\Http\Request  $requestasd
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
        
        $delclient = DB::table('applicants')
        ->where('client_id', $id)
        ->delete();
        return back()->with('client_update', 'Client deleted sucessfully');
    }
}
