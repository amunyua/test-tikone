@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create new Booking</div>

                    <div class="panel-body">
                        <form action="{{ url('store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="client-name">Client Names</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="client-name">Client Business Name</label>
                                <input type="text" name="client_business_name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="client-name">Booking Title</label>
                                <input type="text" name="booking_title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="client-name">Appointment date</label>
                                <input type="date" name="appointment_date" class="form-control">
                            </div>
                            <div class="actions">
                                <input type="submit" value="Save" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection