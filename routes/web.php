<?php

use App\Http\Controllers\active_client;
use App\Http\Controllers\adminController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\searchController;
use App\Models\activeclient;
use App\Models\client;
use App\Models\new_client;
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
Route::resource('/joborder', 'App\Http\Controllers\JobController');
Route::resource('/client', 'App\Http\Controllers\clientController');
Route::resource('/activeclients', 'App\Http\Controllers\active_client');
Route::resource('/statusdashboard', 'App\Http\Controllers\dashboardController');
Route::resource('/applicant', 'App\Http\Controllers\applicant_Controller');

//Pages Dashboard
Route::get('/dashboard' , 'App\Http\Controllers\PagesController@dashboard');
Route::get('/selectclient/{id}', 'App\Http\Controllers\PagesController@add_JO');
Route::get('/addclient' , 'App\Http\Controllers\PagesController@addclient');
Route::get('/selectclient' , 'App\Http\Controllers\PagesController@selectclient');
Route::get('/profile' , 'App\Http\Controllers\PagesController@profile');
//Pages Active Clients
Route::get('/deployment' , 'App\Http\Controllers\PagesController@deployment');

//Pages Applicant Pages
Route::get('applicant_list', 'App\Http\Controllers\PagesController@applicant_list');
Route::get('selectposition', 'App\Http\Controllers\PagesController@add_applicant');
//Job Position Selection to add new applicant

Route::get('/position/{id}' , 'App\Http\Controllers\client_data_controller@getallposition');


//Route::get('/activeclient/{id}', 'App\Http\Controllers\clientController@getstatuspositiondata');
//Route::get('/activeclient/{id}', [ active_client::class, 'getstatuspositiondata'])->name('show.getstatuspositiondata');


// For all search pages
Route::get('/search', [searchController::class, 'search'])->name('web.search');

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