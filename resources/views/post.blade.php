@extends('layouts.main')

@section('container')
<article>
<h2>{{ $post->title }}</h2>

{!! $post->body !!}

<a href="/post">Back to Posts</a>
</article>
@endsection
