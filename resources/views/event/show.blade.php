@extends('layouts.admin')
@section('content')

<h1>Showing Event {{ $event->title }}</h1>
<div class="jumbotron text-center">
    <p>

        <strong>Task Title:</strong> {{ $event->title }}<br>

    </p>
</div>
@endsection
