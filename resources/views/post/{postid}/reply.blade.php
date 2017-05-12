@extends('layouts.master')


@section('title')

@endsection


@push('head')

@endpush


@section('content')
<br> <br>
<div class='blacktext-form blacktext'>
{{ Form::open(array('route' => array('submit', $postid))) }}
{{ Form::token() }}
{{ Form::text('content') }}</div>
 <p>(required)</p> <br>

 <div class='blacktext-form blacktext'>
{{ Form::submit('Post Reply') }}
</div>

<br><br>
@endsection
