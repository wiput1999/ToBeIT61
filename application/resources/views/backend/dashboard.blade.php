@extends('backend.partials')
@section('content')
    <div class="row">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
        <h3>Current round registration : {{ $current }}</h3>
    </div>
    <div class="row">
        <a class="btn btn-success" href="{{ URL('/backend/excel') }}">Generate Report</a>
    </div>
@endsection