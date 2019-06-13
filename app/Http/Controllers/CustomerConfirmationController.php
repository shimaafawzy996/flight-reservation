<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerBookings;
use Carbon\Carbon;
class CustomerConfirmationController extends Controller
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
        $booking=new CustomerBookings();
        $booking->customer_name=$request->name;
        $booking->customer_email=$request->email;
        $booking->customer_phone=$request->phonenumber;
        $booking->passport_number=$request->passnumber;
        $booking->address=$request->address;
        $return=Carbon::parse($request->dob);
        $booking->birth_date = date("d-m-Y", strtotime($return));
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
        $booking->flight_type= $trip;
        $booking->source=$request->state;
        $booking->destination=$request->city;
        $departure=Carbon::parse($request->deparure);
        $booking->departure_date = date("d-m-Y", strtotime( $departure));
        $departure1=Carbon::parse($request->return1);
        $booking->return_date = date("d-m-Y", strtotime(  $departure1));
        $booking->save();
        return view ('thankyou');
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
