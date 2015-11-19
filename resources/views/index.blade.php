@extends('public')


@section('content')

    <div class="col-md-2"></div>

    <div class="col-md-8">

        <h1>Recyle NB Online Registration</h1>

        <p>Welcome to Recycle NB’s online registration.  Please check the program, or programs, for which you are registering:</p>


        {!! Form::open(['url' => '/', 'method' => 'post']) !!}



        <div class="form-group">
            <label for="r">{!! Lang::get('forms.register_for') !!}</label>
            <select name="r" class="form-control">
                <option value="1">Oil and Glycol Program</option>
                <option value="2">Paint</option>
                <option value="3">Electronics</option>
                <option value="3">Tires</option>
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