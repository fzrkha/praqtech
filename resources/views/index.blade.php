@extends('hed.heder')

@section('contents')
@foreach ($contents as $content)
<article class="mb-5" align="center">
    <img src="{{ asset('img') }}/{{ $content->image }}" width="30%">
    <h2>
        <a href="/contents/{{ $content->slug }}" class="text-decoration-none">{{ $content->name }}</a>
    </h2>
    <small>Source: <a href="/categories/{{ $content->anigame->slug }}" class="text-decoration-none">{{ $content->anigame->sc_name }}</a></small>
</article>
@endforeach
@endsection