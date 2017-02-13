@extends('layouts.defaultLayout')
@section('content')
    <div class="row" style="padding-bottom: 15%">
        <div class="col-md-3"></div>
        <div class="col-md-6 well well-lg">
            {!! Form::open(array('url' => '/loginAdmin')) !!}
            <div class="form-group">
                {{ Form::label('username', 'Username') }}
                {{ Form::text('username', null, ['class' => 'form-control']) }}

            </div>

            <div class="form-group">
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password', ['class' => 'form-control']) }}
            </div>

            <div class="form-group text-center">
                {{ Form::submit('Potvrdi', array('class' => 'btn btn-warning')) }}
            </div>


                {!! Form::close() !!}


        </div>
        <div class="col-md-3"></div>
    </div>
@stop