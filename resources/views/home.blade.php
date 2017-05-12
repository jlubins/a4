@extends('layouts.master')


@section('title')

@endsection


@push('head')

@endpush


@section('content')
  <br>
  <h2>Forum List</h2>
  <br>
@foreach ($categories as $category)
  <a href="/category/{{ $category['title'] }}"> {{ $category['title'] }} </a>
  <br>
  {{ $category['description'] }}
  <br>
  <br>
  <br>
@endforeach

@endsection
