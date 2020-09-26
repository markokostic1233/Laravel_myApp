@extends('layout')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


@section('content')

    @forelse($posts as $post)
      <table>
            <a href="{{ route('posts.show', ['post' => $post->id]) }}" > {{ $post->title }} </a>


<br>


            <a href="{{ route('posts.edit', ['post' => $post->id]) }}">
            <br>  <button class="btn btn-primary"> Edit </button>
            </a>

             <form method="POST"
   action="{{ route('posts.destroy',['post' => $post->id]) }}">

            @csrf
            @method('DELETE')

            <input class="btn btn-danger" type="submit" value="Delete" />

             </form>

      </table>


       @if($post->comments_count)
           <p> {{ $post->comments_count }} comments </p>
       @else
         <p>  No comments yet! </p>
       @endif

      <hr style="height: 4px; background-color:blue" >




        </tr>




        </table>


    @empty
         <p> No posts yet   </p>


    @endforelse

@endsection
