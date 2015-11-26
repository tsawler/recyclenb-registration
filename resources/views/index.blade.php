@extends('public')


@section('content')

    <div class="col-md-2"></div>

    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12"></div>
            <a class="pull-right" href="/changelanguage?lang={!! Lang::get('forms.lang') !!}&url=/">{!! Lang::get('forms.language_choice') !!}</a>
        </div>

        <h1>{!! Lang::get('forms.welcome_title') !!}</h1>

        <p>{!! Lang::get('forms.welcome_blurb') !!}</p>


        {!! Form::open(['url' => '/', 'method' => 'post']) !!}



        <div class="form-group">
            <label for="r">{!! Lang::get('forms.register_for') !!}</label>
            <select name="r" class="form-control">
                <option value="1">{!! Lang::get('forms.oil_program') !!}</option>
                <option value="2">{!! Lang::get('forms.paint') !!}</option>
                <option value="3">{!! Lang::get('forms.electronics') !!}</option>
                <option value="4">{!! Lang::get('forms.tires') !!}</option>
            </select>
        </div>

        <hr>
        <div class="form-group">
            <div class="controls">
                {!!  Form::submit(Lang::get('forms.next'), array('class' => 'btn btn-primary')) !!}
            </div>
        </div>

        {!! Form::close() !!}
    </div>

    <div class="col-md-2"></div>

@stop