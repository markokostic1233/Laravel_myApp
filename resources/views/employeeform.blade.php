@extends('layout')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


@section('content')

<div>
  <a class="btn btn-success" href="{{ route('employee.index') }}" > Back  </a> </li>
</div>
<br>

  <table class="table table-sm table-primary table-hover" style="font-size: 13px" >
    <thead>
     <tr>
       <th scope="col"> Id  </th>
       <th scope="col"> Name </th>
       <th scope="col"> Email </th>
       <th scope="col"> Post </th>
       <th scope="col"> Image </th>

     </tr>
    </thead>

    <tbody>
       @foreach($employees as $employee)
            <tr>
              <th scope="rowgroup"> {{ $employee->id }}  </th>
              <th> {{ $employee->name }} </th>
              <th> {{ $employee->email }} </th>
              <th> {{ $employee->post }} </th>
              <th> {{ $employee->image }} </th>

            </tr>
       @endforeach

    </tbody>



  </table>



@endsection
