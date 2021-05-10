@extends('layouts.app')

@section('content')
<div class="container">
    <br />
    <h1 class="text-center text-primary"><u>How to Use Fullcalendar in Laravel 8</u></h1>
    <br />

    <div id="calendar"></div>

</div>

<script>

$(document).ready(function () {

     $.ajaxSetup({
       headers:{
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content');
       }
      })
   });


   var calendar = $('#calendar').fullCalendar();

</script>
@endsection
