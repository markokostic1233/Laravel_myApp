@extends('layout')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

@section('content')

<section style="padding-top:60px ">

     <h3> Image </h3>

     <form method="POST" action="{{ route('image.resize') }}" enctype="multipart/form-data">
         @csrf

         <label> Chose Image  </label>
         <br><br>
        <input type="file" name="file"/>

        <br> <br>

        <button type="submit">Submit </button>

     </form>


</section>

@endsection
