@extends('layout')

@section('test-content')
<h1 class="content m-b-md">{{$test->id}}</h1>
<p class="content">{{$test->title}}</p>
@endsection
