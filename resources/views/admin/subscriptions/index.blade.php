@extends('admin.master')
@section('content')
    @foreach ($plans as $plan)
{{ $plan->name }} <br>
    @endforeach
@endsection