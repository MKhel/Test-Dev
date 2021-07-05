<?php

namespace App\Http\Controllers;

use App\Models\JobOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class searchController extends Controller
{
    function search(Request $request)
    {   
        if(isset($_GET['query']) && strlen($_GET['query']) > 2){
            $search_text = $_GET['query'];
            $jobs = DB::table('job_orders')->where('position', 'LIKE', '%'.$search_text.'%')->paginate(3);
            $jobs->appends($request->all());
            $alljobs = JobOrder::all();
            return view('Client.allJobOrder', ['jobs' => $jobs], ['alljobs' => $alljobs]);
        }
        else {
            return view('Client.allJobOrder');
        }
        
    }
}
