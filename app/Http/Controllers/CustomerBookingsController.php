<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use DB;

use App\Flight;
use Illuminate\Support\Facades\Input;

class CustomerBookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
    $flight_source= Input::get ( 'from' ); 
   
    $flight_destination=Input::get ( 'to' ); 
   
    $departure_date=Input::get ( 'deparure' ); 
    $departure=Carbon::parse($request->deparure);
    $newDate = date("d-m-Y", strtotime($departure));
  
    $return_date=Input::get ( 'return1' ); 

    $return=Carbon::parse($request->return1);
    $newDate1 = date("d-m-Y", strtotime($return));
  

    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["trip"])) {
            $genderErr = "trip is required";
          } else {
            $trip = test_input($_POST["trip"]);
           
          }
        }

     if(Flight::where([
        ['source', 'LIKE', '%'.$flight_source.'%'],
        ['destination', 'LIKE','%'.$flight_destination.'%'],
        ['departure_date', 'LIKE','%'.$departure_date.'%'],
        ['return_date', 'LIKE','%'.$return_date.'%'],
        ['flight_type', 'LIKE','%'.$trip.'%'],
    ])->count()>0){
    return view('confirmation');
     }
   else   return view('sorry'); 
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
