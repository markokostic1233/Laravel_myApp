@extends('layout')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

@section('content')
   <div>
      <a class="btn btn-success" href="/employees" > Forward </a>
    </div>
    <br>

      <div class="container" style="background-color: silver">

        <form method="POST" action="{{ route('addimage') }}" enctype="multipart/form-data" >
       {{ csrf_field() }}
         <div class="form-group">
           <label>Name </label>
           <input type="text" name="name" class="form-control" value="{{ old('name') }}" class="form-control" placeholder="Enter name" >

           @error('name')
                <p style="color: red"> {{ $message }} </p>
           @enderror


         </div>

         <div class="form-group">
            <label>Email </label>
            <input type="email" name="email" value="{{ old('email') }}"  class="form-control" placeholder="Enter email" >

            @error('email')
             <p style="color: red"> {{ $message }} </p>
            @enderror
          </div>

          <div class="form-group">
            <label>Post </label>
            <input type="text" name="post" value="{{ old('post') }}" class="form-control" placeholder="Enter post" >

            @error('post')
                <p style="color: red"> {{ $message }} </p>
            @enderror
          </div>

          <label> Image </label>

          <div class="input-group">


              <div class="custom-file">
                   <input type="file" name="image" class="custom-file-input">
                   <label class="custom-file-label">Chose file </label>


              </div>

          </div>
          @error('image')
          <p style="color: red"> {{ $message }} </p>
     @enderror
          <br>
          <button type="submit" name="submit" class="btn btn-primary btn-block">Save </button>
        <br>
        </form>


      </div>




      {{--  <div class="section">

        @if($errors->any())

              <ul>
                 @foreach($errors->all() as $error)
                <li>  <p>   {{ $error }} </p> </li>
                 @endforeach
              </ul>
        @endif

      </div>  --}}






      @endsection
