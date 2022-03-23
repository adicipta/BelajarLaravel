@extends('layouts.main')

@section('container')
<article>
<h1 class="mb-5">{{ $post->title }}</h1>

<p>By. Adi Cipta in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

{!! $post->body !!}

</br><a href="/post">Back to Posts</a>
</article>
@endsection
