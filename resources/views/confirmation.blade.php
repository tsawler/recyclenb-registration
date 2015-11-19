@extends('public')

@section('content')
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h1>{!! Lang::get('forms.confirmation_title') !!}</h1>
        <p>{!! Lang::get('forms.confirmation_blurb') !!}</p>
    </div>
    <div class="col-md-2"></div>
@stop