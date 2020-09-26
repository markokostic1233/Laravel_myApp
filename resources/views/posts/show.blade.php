@extends('layout')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


@section('content')

<style>
    table, th, td {
        border: 2px solid black;
        background-color: blue

</style>

<table>
<tr>
  <th>Title</th>
  <th>Short content</th>
  <th>Content</th>
<tr>
<tr>
   <td>  {{ $post->title }}  </td>
   <td> {{ $post->short_content }}  </td>
   <td> {{ $post->content }} </td>



</tr>
</table>

     <p> Added {{ $post->created_at->diffForHumans() }} </p>

     @if($post->id === 1)
     Post one
     @elseif($post->id === 2)
     Post two
     @else
     Something else
     @endif

     @if((new Carbon\Carbon())->diffInMinutes($post->created_at) <5 )
         <p> New! </p>
     @endif


@endsection
