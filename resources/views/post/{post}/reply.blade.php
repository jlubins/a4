@extends('layouts.master')


@section('title')

@endsection


@push('head')

@endpush


@section('content')


{{ Form::open(array('route' => array('submit', $postid))) }}
{{ Form::token() }}
{{ Form::text('content') }}
{{ Form::submit('Post Reply') }}

@endsection
