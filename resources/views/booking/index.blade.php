@extends('layouts.app')

@section('title', 'My bookings')

@section('content')
<h1>List of my bookings</h1>
<div class="row">
    <div class="col">
        <h3>Upcoming bookings</h3>
        <ul class="list-group">
            @foreach ($comingBookings as $booking)
            <a href="{{ route('booking.show', $booking->id) }}">
                <li class="list-group-item list-group-item-action">
                    Your booking will be for the <strong>{{ $booking->booking_date}}</strong> at
                    <strong>{{ date('H:i', strtotime($booking->booking_time)) }}</strong>
                    <span class="badge badge-primary badge-pill float-right">{{ $booking->destination }} </span>
                </li>
            </a>
            @endforeach
        </ul>
    </div>
    <div class="col">
        <h3>Passed bookings</h3>
        <ul class="list-group">
            @foreach ($passedBookings as $booking)
            <li class="list-group-item list-group-item-action">
                Your booking was for the <strong>{{ $booking->booking_date }} </strong> at {{ date('H:i', strtotime($booking->booking_time)) }}
                <span class="badge badge-primary badge-pill float-right">{{ $booking->destination }} </span>
            </li>
            @endforeach
        </ul>
    </div>
</div>
    
@endsection