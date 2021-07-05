<?php

namespace App\Http\Controllers;

use App\Models\activeclient;
use App\Models\JobOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countJobsite = DB::table('clients')->count();
        $countJobOrder = DB::table('job_orders')->count();
        $countClient = DB::table('activeclients')->count();
        $countapplicant = DB::table('applicants')->count();
        $percentClient = $countClient / 100 * 100;
        $percentJobsite = $countJobsite / 100 * 100;
        $percentJobOrder = $countJobOrder / 100 * 100;
        $percentapplicant = $countapplicant / 100 * 100;
        $clientData = DB::table('activeclients')->get();

        return view('dashboard', compact('countClient', 'percentClient', 'countJobsite', 'percentJobsite', 'countJobOrder', 'percentJobOrder', 'clientData', 'percentapplicant', 'countapplicant'));
    
    
    
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
        //
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
        //
    }
}
