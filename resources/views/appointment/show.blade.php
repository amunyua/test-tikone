@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">View Details</div>

                    <div class="panel-body">
                        <ul class="list-unstyled">
                            <li>Client Name: {{ $ds->name }}</li>
                            <li>Business Name: {{ $ds->client_business_name }}</li>
                            <li>Booking Title: {{ $ds->booking_title }}</li>
                            <li>Appointment Date: {{ $ds->appointment_date }}</li>
                            <li>Booking Ststus: {{ ($ds->booking_status == 0)? 'Active': 'Inactive' }}</li>
                        </ul>

                        <a href="{{ url('/appointments') }}" class="btn btn-block btn-success">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection