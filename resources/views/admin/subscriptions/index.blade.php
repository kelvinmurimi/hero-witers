@extends('admin.master')
@section('content')
    @foreach ($plans as $plan)
{{ $plan->name }} <br>
    @endforeach
<form action="{{ route('subscriptions.store') }}" method="post">
    @csrf
    <input type="hidden" value="450" name="amount">
    <input type="submit" value="pay">
</form>
@endsection
