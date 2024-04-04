@extends('layout')
@include('partials._hero')
@include('partials._search')

@section('content')
<h2>
    {{$listing['title']}}
</h2>

<p>
    {{$listing['description']}}
</p>
@endsection