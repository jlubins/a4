@extends('layouts.master')


@section('title')

@endsection


@push('head')

@endpush


@section('content')
  <br>

  @foreach($posts as $post)
    <h3>{{ $post->title }}</h3>
    <h4>{{ $post->content }}</h4><h5> by {{ $user1[0]['name'] }} </h5>
    <h5>Tags:
    @foreach($post->tags as $tag)
            {{ $tag->name.', ' }}
    @endforeach
    </h5>
    @if($match1)
    <a href="/post/{{ $post['id'] }}/edit">Edit Post</a>
    <a href="/post/{{ $post['id'] }}/delete">Delete Post</a>
    @endif
@endforeach
  <br>
  <br>

  @if($replies)
    @foreach($replies as $reply)
      <h4>{{ $reply->content }} </h4><h5> by {{ $user2[0]['name'] }} </h5>
      @if($match2)
      <a href="/post/{{ $reply['id'] }}/edit">Edit Post</a>
      <a href="/post/{{ $reply['id'] }}/delete">Delete Post</a>
      @endif
      <br>
    @endforeach
  @endif

  <br>
  <a href="/post/{{ $post['id'] }}/reply">Reply</a>
  <br>
  <br>
  @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
@endsection
