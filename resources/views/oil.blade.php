@extends('public')


@section('content')
    <div class="col-md-2"></div>

    <div class="col-md-8">
        <h1>Brand Owner Registration Form</h1>
        <h2>Oil and Glycol Program</h2>
        <hr>
        {!! Form::open(array('url' => 'foo/bar')) !!}
            @include('forms.oil-form')
        {!! Form::close() !!}
    </div>

    <div class="col-md-2"></div>

@stop