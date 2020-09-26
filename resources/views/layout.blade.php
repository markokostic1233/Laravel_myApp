<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
  <ul>

    <li> <a href="{{ route('home') }}">Home </a> </li>
    <li> <a href="{{ route('meni') }}">Meni </a> </li>
    <li> <a href="{{ route('posts.index') }}">Page </a> </li>
    <li> <a href="{{ route('posts.create') }}"> Add  </a> </li>
    <li> <a href="{{ route('image.resize') }}" > Image </a> </li>
    <li> <a href="{{ route('employee.index') }}" > Employers </a> </li>

  </ul>


  <hr>


  <div class="container">

   @if(session()->has('status'))
     <p style="color: green">
       {{ session()->get('status') }}
    </p>

   @endif

</div>

<div class="container" >

@if(session()->has('uspesno'))
<p style="background-color: blue;color:white">
{{ session()->get('uspesno') }}
</p>

</div>


@endif

   @yield('content')




</body>
</html>
