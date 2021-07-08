<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class adminController extends Controller
{
    function index(){
        return view('Admin.admin_dashboard');
        }
        // function profile(){
        //     return view('');
        // }
}
