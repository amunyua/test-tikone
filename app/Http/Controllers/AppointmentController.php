<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $appointments = Appointment::all();
        return view('appointment.appointment',array(
          'app'=>$appointments
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appointment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointment = new Appointment();
        $appointment->name = $request->name;
        $appointment->client_business_name = $request->client_business_name;
        $appointment->booking_title = $request->booking_title;
        $appointment->appointment_date = $request->appointment_date;
        if($appointment->save()){
          return redirect('appointments');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointment = Appointment::find($id);
        return view('appointment.show',array(
          'ds'=>$appointment
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('appointment.edit',array(
          'ds'=>Appointment::find($id)
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $appointment = Appointment::find($request->id);
        $appointment->name = $request->name;
        $appointment->client_business_name = $request->client_business_name;
        $appointment->booking_title = $request->booking_title;
        $appointment->appointment_date = $request->appointment_date;
        $appointment->booking_status = $request->booking_status



        ;

      if($appointment->save()){
        return redirect('appointments');
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Appointment::destroy($id);
//        $this->destroy($id);
      return redirect('appointments');
    }
}
