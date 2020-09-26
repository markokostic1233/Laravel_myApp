@extends('layout')



@section('content')


    <style>
       input{
           width: 130%;
       }

    </style>
      <section style="width: 80px; margin:30px; padding:100px">


                  <h5>Form </h5>


                <form method="POST" action="{{ route('formaa') }}" >
                    {{ csrf_field() }}

                        <label> Name <label>
                        <input type="text" name="firstname"  required>

                        <label> Last Name <label>
                        <input type="text" name="lastname"  required>

                        <label> Email <label>
                         <input type="email" name="email"  required>

                         <label> Phone <label>
                         <input type="text" name="phone" required>

                            <label> Message <label>
                         <textarea  name="msg" required> </textarea>


                     <button type="submit" name="submit" class="btn btn-primary">Send </button>

                </form>


      </section>

      @endsection



