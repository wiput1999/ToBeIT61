@extends('backend.partials')
@section('content')
    <div class="row">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
        <h3>Current round registration : {{ $register }}</h3>
    </div>
    <div class="row">
        <h3>Current round walk-in registration : {{ $walkin }}</h3>
    </div>
    <div class="row">
        <h3>Current round Saturday check-in : {{ $checkin_saturday }}</h3>
    </div>
    <div class="row">
        <h3>Current round Sunday check-in : {{ $checkin_sunday }}</h3>
    </div>
    <div class="row">
        <h3>Current round both day check-in : {{ $checkin_both }}</h3>
    </div>
    <div class="row">
        <a class="btn btn-success" href="{{ URL('/backend/excel') }}">Generate Report (All)</a>&nbsp;
        <a class="btn btn-success" href="{{ URL('/backend/excel/register') }}">Generate Report (Register)</a>&nbsp;
        <a class="btn btn-success" href="{{ URL('/backend/excel/walkin') }}">Generate Report (Walk-in)</a>&nbsp;
        <a class="btn btn-success" href="{{ URL('/backend/excel/saturday') }}">Generate Report (Saturday)</a>&nbsp;
        <a class="btn btn-success" href="{{ URL('/backend/excel/sunday') }}">Generate Report (Sunday)</a>
    </div>
@endsection