@extends('backend.partials')
@section('content')
    <div class="row">
        <h1>Config</h1>
    </div>
    <div class="row">
        <p style="color: #FF0000;">Be careful! Config will not validate your input! A mistake can damage application!</p>
    </div>
    <form action="{{ d_url('/backend/config') }}" method="post">
        {{ csrf_field() }}
        @foreach($configs as $config)
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="{{ $config['key'] }}" class="col-md-12 col-form-label">{{ $config['key'] }} (Integer only)</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="{{ $config['key'] }}" name="{{ $config['key'] }}" placeholder="{{ $config['key'] }}" value="{{ $config['value'] }}">
                    </div>
                </div>
            </div>
        @endforeach
        <button type="submit" class="btn btn-success">Save!</button>
    </form>

@endsection