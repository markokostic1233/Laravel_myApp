@extends('layout')


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

@section('content')

  <form method="POST"
   action="{{ route('posts.update',['post' => $post->id]) }}">

    @csrf
    @method('PUT')

     <label>  Title </label>
     <input type="text" name="title" value="{{ old('title', $post->title) }}" />

     <br><br>

     <label> Short content </label>
     <input type="text" name="short_content" value="{{ old('short_content', $post->short_content) }}" />

     @csrf

     <br><br>

     <label> Content </label>
     <input type="text" name="content" value="{{ old('content', $post->content) }}" />

     @if($errors->any())
         <div>
             <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
             </ul>
         </div>
     @endif

     <br><br>

     <button type="submit" > Edit </button>


  </form>

@endsection
