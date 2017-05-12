@extends('layouts.master')


@section('title')

@endsection


@push('head')

@endpush


@section('content')
  <br>
  <h2>C Forum</h2>
  <br>
@foreach ($posts as $post)
  <a href="/post/{{ $post['id'] }}"> {{ $post['title'] }} </a>
  <br>
  <br>
@endforeach

@endsection
