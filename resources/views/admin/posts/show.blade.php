@extends('layouts.dashboard')

@section('content')
<h1>{{ $post->title}}</h1>
<p>{{ $post->body}}</p>
<p>{{ $post->created_at}}</p>
<p>{{ $post->updated_at}}</p>
@endsection

