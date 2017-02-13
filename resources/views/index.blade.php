@extends('layouts.defaultLayout')
@section('nav')
    @include('includes.nav')
@stop
@section('latestNews')
    @include('includes.latestNews')
@stop
@section('slider')
    @include('includes.slider')
@stop
{{--@section('weather')--}}
    {{--@include('includes.weatherForecast')--}}
{{--@stop--}}
@section('content')
    @include('includes.content')
@stop
@section('footer')
    @include('includes.footer')
@stop