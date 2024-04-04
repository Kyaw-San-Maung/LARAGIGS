 @extends('layout')
 
 @section('content')
 <h1>{{$headings}}</h1>
 
 @foreach ($posts as $post)
 
    <h1>
      <a href="/listing/{{$post['id']}}">
         {{$post['title']}}
      </a>
   </h1>
    <p>{{$post['description']}}</p>
 @endforeach

 @endsection