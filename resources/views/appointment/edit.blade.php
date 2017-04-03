@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Booking details</div>

                    <div class="panel-body">
                        <form action="{{ url('update') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{ $ds->id }}">
                                <label for="client-name">Client Names</label>
                                <input type="text" value="{{ $ds->name }}" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="client-name">Client Business Name</label>
                                <input type="text" value="{{ $ds->client_business_name }}" name="client_business_name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="client-name">Booking Title</label>
                                <input type="text" value="{{ $ds->booking_title }}" name="booking_title" class="form-control">
                            </div>


                            <div class="form-group">
                            <label for="client-name">Booking status</label>
                                <select name="booking_status" class="form-control">
                                    <option value="true">Active</option>
                                    <option value="false">Inactive</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="client-name">Appointment date</label>
                                <input type="date" value="{{ $ds->appointment_date }}" name="appointment_date" class="form-control">
                            </div>
                            <div class="actions">
                                <input type="submit" value="Update" class="btn btn-primary">
                                <a href="{{url('appointments')}}">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection