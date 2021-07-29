<?php

use App\Http\Controllers\active_client;
use App\Http\Controllers\adminController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\userController;
use App\Models\activeclient;
use App\Models\Applicant;
use App\Models\client;
use App\Models\JobOrder;
use App\Models\new_client;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use phpDocumentor\Reflection\Types\Resource_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('dashboard');
});

//required parameters
Route::get('great/{name?}', function ($name = "Michael") {
    return "Hello ".$name;
})->name("GreatRoutes");

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});


//routegroups
Route::group(['prefix' => 'admin'], function(){
	Route::get('dashboard', function(){
		return "dashboard";	
	});
});

//passing data to views
Route::get('/dashboard', function () {
	$name = "Michael";
    return view('dashboard')->witdh('name', $name);
});
//checking database connection
Route::get('db', function(){
	try { 
		DB::connection()->getPdo();
		echo "Connected to Database  " . DB::connection()->getDatabaseName();
	} catch (\Exception $e) {
		echo "Not Connected to Database";
	}

});


//array 
Route::get('/dashboard', function () {
	$name = "Michael";
	$employee  = array( array("name" => "Michael", "age" => 20, "gender" => "Male" ),
	array("name" => "wish", "age" => 20, "gender" => "Male" ), array("name" => "john", "age" => 20, "gender" => "Male" )
	);
    return view('dashboard')->witdh('name', $name);
});


//dashboard 


Route::get('/activeclient' , 'App\Http\Controllers\clientController@index');


Route::view('addclientform' , 'addclient');
Route::get('/joborders_percountry' , 'App\Http\Controllers\PagesController@joborders_percountry');
Route::get('/client_jobsite' , 'App\Http\Controllers\PagesController@client_jobsite');
Route::get('/add_joborder' , 'App\Http\Controllers\PagesController@add_joborder');
Route::get('/addclient' , 'App\Http\Controllers\PagesController@addclient');
Route::get('/nextpage_client' , 'App\Http\Controllers\PagesController@nextpage_client');


//Route::get('/activeclient' , 'App\Http\Controllers\active_clientController@new_client');
//Route::get('/jobsite' , 'App\Http\Controllers\clientController@index');
//Route::post('/saveclient' , 'App\Http\Controllers\clientController@store');
//Route::get('/joborders' , 'App\Http\Controllers\clientController@joborders');
//Route::put('/activeclient/{{$newclient->id}}' , 'App\Http\Controllers\clientController@show');




//Route::get('/user', [ClientController::class, 'index']);
//models

Route::get('/', function() {
	$data = client::paginate(1);
	return view('joborders_percountry')->withData($data);
});
Route::any('/search', function(){
	$search = request()->get('btn');
	if ($search =! 'btn') {
		$data = client::where('jobsite', 'Like', '%'.'btn'.'%')
										->paginate(1);
										
	};
        

});*/
//Route::get('/', function () {
    //return view('dashboard');b
//});
Route::get('/client', [App\Http\Controllers\clientController::class, 'index'])->name('client')->middleware(['auth']);
Route::resource('/joborder', 'App\Http\Controllers\JobController')->middleware(['auth']);
//Route::resource('/client', 'App\Http\Controllers\clientController')->middleware(['auth']);
Route::resource('/activeclients', 'App\Http\Controllers\active_client')->middleware(['auth']);
Route::resource('/statusdashboard', 'App\Http\Controllers\dashboardController')->middleware(['auth']);
Route::resource('/applicant', 'App\Http\Controllers\applicant_Controller')->middleware(['auth']);

//Pages Dashboard
Route::get('/dashboard' , 'App\Http\Controllers\PagesController@dashboard')->middleware('auth');
Route::get('/selectclient/{id}', 'App\Http\Controllers\PagesController@add_JO')->middleware(['auth']);
Route::get('/addclient' , 'App\Http\Controllers\PagesController@addclient')->middleware(['auth']);
Route::get('/selectclient' , 'App\Http\Controllers\PagesController@selectclient')->middleware(['auth']);
Route::get('/profile' , 'App\Http\Controllers\PagesController@profile')->middleware(['auth']);
//Pages Active Clients
Route::get('/deployment' , 'App\Http\Controllers\PagesController@deployment')->middleware(['auth']);

//Pages Applicant Pages
Route::get('applicant_list', 'App\Http\Controllers\PagesController@applicant_list')->middleware(['auth']);
Route::get('selectposition', 'App\Http\Controllers\PagesController@add_applicant')->middleware(['auth']);
//Job Position Selection to add new applicant

Route::get('/position/{id}' , 'App\Http\Controllers\client_data_controller@getallposition')->middleware(['auth']);


//Route::get('/activeclient/{id}', 'App\Http\Controllers\clientController@getstatuspositiondata');
//Route::get('/activeclient/{id}', [ active_client::class, 'getstatuspositiondata'])->name('show.getstatuspositiondata');


// For all search pages
Route::get('/search', [searchController::class, 'search'])->name('web.search')->middleware(['auth']);

// Accout Profile
Route::post('change-profile-picture', [adminController::class, 'updatePicture'])->name('adminPictureUpdate');
Route::get('/insert', function () {
	client::insert([
		'clients_name' => 'Tech',
		'descriptions' => 'Anything',
		'jobsite' => 'USA',
		'POEA_accredition' => 'POEA-722123133213',
		'expiration_date' => '12-12-21',
		'poea_position' => 'NOthing',
		'visa_position' => 'NOthing',
		'number_slot' => '30',
		'basic_salary' => '50000',
		'number_deployed' => '50',
		'slot_expiration' => '12-12-21'

	]);
	return 'Sucessfully';
});

Route::get('/testtab', function(){
	$id = "1";
	$data = Applicant::all();
	$position_array = array();
	$pos_datas = DB::table('applicants')->where('client_id', 'LIKE', "$id")->get();
	$poss_data = json_decode($pos_datas);
	//return $poss_data;
	//print_r($position_array);
	//print_r($poss_data);	//dd($data,'as');]\
	foreach ($poss_data as $positionData) {
			$jobstat = $positionData->job_application_status;
			$appID = $positionData->applicant_id;
			$pos_data = $positionData->position;
			//$datacount = array_count_values($positionData);
			//$position_array= [$pos_data];
			$position_array[$pos_data]=$jobstat;
	
			//array_push($position_array, $pos_data);
			
		}
	// // foreach ($pos_data as $positionData) {
	// // 	$jobstat = $positionData->job_application_status;
	// // 	$pos_data = $positionData->position;
	// // 	//$datacount = array_count_values($positionData);
	// // 	//$position_array[$pos_data]= 'position';
	// // 	//$position_array=[$pos_data];

	// // 	array_push($position_array, $pos_data);
	// // }
	$Lined_up = DB::table('applicants')->where('applicant_id', "$appID")->where('position', "$pos_data")->where('job_application_status', "Line Up")->get()->count();
    $Selected = DB::table('applicants')->where('applicant_id', "$appID")->where('position', "$pos_data")->where('job_application_status', "Selected")->get()->count();
    $Signed_JOL = DB::table('applicants')->where('applicant_id', "$appID")->where('position', "$pos_data")->where('job_application_status', "Signed JOL")->get()->count();
	$poss_count_array = array($Lined_up, $Selected, $Signed_JOL);
	$position_count_array = array();
	$position_stat_array = array();
	//$poss_array = array($position_array);
	foreach ($position_array as $positionData=>$jobstat) {
		$position_count_stat = ($positionData);
		array_push($position_count_array, $position_count_stat);
		array_push($position_stat_array, $jobstat);
	}
	// 	//$datacount = array_count_values($positionData);
	// 	//$position_array[$pos_data]= 'position';
	// 	//$position_array=[$pos_data];

	// 	//array_push($position_array, $pos_data);
	// }
	
	// // $Lined_up = DB::table('applicants')->where('position', "$pos_data")->where('job_application_status', "$jobstat")->get()->count();
	// // $post_count = array($Lined_up);
	// //$array = ($data);
	// //$pos_array = array($position_array);
	// //$datas = var_dump(array_count_values($array));
	print_r($position_stat_array);
	print_r($position_count_array);
	print_r($position_array);
	// print_r($pos_data);
	// //$pos_data = array($position_array);
	return view('table',compact( 'position_array', 'poss_data'));

	// // $array = [
	// // 	0 => 'easy',
	// // 	1 => 'easy',
	// // 	2 => 'easy',
	// // 	3 => 'medium',
	// // 	4 => 'medium',
	// // 	5 => 'medium',
	// // 	6 => 'hard',
	// // 	7 => 'hard',
	// // 	8 => 'hard',
	// // 	9 => 'hard',
	// //    10 => 'hard'
	// // ];
	
	// // //echo "<pre>";
	// // //print_r($array);
	// // // $data = var_dump(array_count_values($array));
	// // // print_r($data);
	// // //return dd($data);

	// // $stats = [
	// // 	'easy' => 0,
	// // 	'medium' => 0,
	// // 	'hard' => 0,
	// // ];
	
	// // // Alternatively dynamic way:
	// // $a = array_flip(array_unique($array));
	// // $b = array_fill_keys(array_keys($a), 0);
	
	// // foreach($array as $value) {
	// // 	$stats[$value]++; // Static Way
	// // 	$b[$value]++;  // Dynamic way
	// // }
	
	// // echo "<pre>";
	// // print_r($stats);
	// // print_r($b);
	// // exit;
	
        // $id = "1";
        // $position_array = array();
        // $position_data  = DB::table('applicants')->where('client_id', "$id")->get();
        // $position_data = json_decode($position_data);
        
        // if( ! empty($position_data)) {
        //     foreach ($position_data as $positionData) {
        //         $jobstat = $positionData->job_application_status;
        //         $pos_data = $positionData->position;
        //         $position_array[$pos_data]= $jobstat;
        //     }
                
        // }
		// $Lined_up = DB::table('applicants')->where('position', "$pos_data")->where('job_application_status', "Line Up")->get()->count();
        // $Selected = DB::table('applicants')->where('position', "$pos_data")->where('job_application_status', "Selected")->get()->count();
        // $Signed_JOL = DB::table('applicants')->where('position', "$pos_data")->where('job_application_status', "Signed JOL")->get()->count();
        // $post_count = array($Lined_up, $Selected, $Signed_JOL);

		// $position_count_array = array();
        // $position_stat_array = array();
		// $position_array = $position_array;
        
        //     foreach ($position_array as $position_data=>$jobstat){
        //         $position_count_stat = $post_count;
        //         array_push($position_count_array, $position_count_stat);
        //         array_push($position_stat_array, $jobstat);
        //     }
        
		// print_r($position_count_array);
		// return view('table',compact( 'position_count_array', 'pos_data'));
	
});


Route::get('/inserta', function () {
	activeclient::insert([
		'clients_name' => 'Tech',
		'descriptions' => 'Anything',
		'poea_accredition' => 'POEA 1213151'
	]);
	return 'Sucessfully';
});

Route::get('/newjoborder', function(){
	return view('Client.addnewjoborder');
});

Route::get('/app', function(){
	return view('layouts.apps');
});


Route::get('/addclient_jobsite', function(){
	$clientData = activeclient::all();
	return view('Client.addclient_jobsite', compact('clientData'));
});
Route::get('/joborders_percountry' , 'App\Http\Controllers\PagesController@joborders_percountry');

Route::get('/testtest' , 'App\Http\Controllers\PagesController@test');

//Route::get('activeclient', 'App\Http\Controllers\clientController@index');


Route::get('/admin-dashboard', function(){
	return view('Admin.admin_dashboard');
});
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin', 'auth']], function(){
	Route::get('dashboard', [adminController::class,'index'])->name('admin.dashboard');
	Route::get('profile', [adminController::class,'profile'])->name('admin.profile');
	Route::get('settings', [adminController::class,'settings'])->name('admin.settings');
});

Route::group(['prefix'=>'user', 'middleware'=>['isUser', 'auth']], function(){
	Route::get('dashboard', [userController::class,'index'])->name('user.dashboard');
	Route::get('profile', [userController::class,'profile'])->name('user.profile');
	Route::get('settings', [userController::class,'settings'])->name('user.settings');
});