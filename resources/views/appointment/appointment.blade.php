@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">All Appointments
                    <a href="{{ url('create') }}" class="btn btn-primary btn-sm pull-right">Create New</a>
                    </div>

                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr></tr>
                            <th>Id</th>
                            <th>Client Name</th>
                            <th>Client Business</th>
                            <th>Booking Title</th>
                            <th>Appointment Date</th>
                            <th>Booking status</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            </thead>
                            <tbody>
                            @if(count($app))
                                @foreach($app as $ap)
                                    <tr>
                                    <td>{{ $ap->id }}</td>
                                    <td>{{ $ap->name }}</td>
                                    <td>{{ $ap->client_business_name }}</td>
                                    <td>{{ $ap->booking_title }}</td>
                                    <td>{{ $ap->appointment_date  }}</td>
                                    <td>{{ ($ap->booking_status == 0)? 'Active': 'Inactive'  }}</td>
                                    <td><a href="show/{{$ap->id}} s">View</a> </td>
                                    <td><a href="edit/{{$ap->id}}">Edit</a> </td>
                                    <td><a href="delete/{{$ap->id}}">delete</a> </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
