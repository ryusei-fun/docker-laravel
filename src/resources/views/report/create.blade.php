@extends('layouts.app')

@section('content')
<form action="{{ route('store.report') }}" method="POST">
    @csrf
    <input type="text" name="content">
    <button type="submit">送信</button>
</form>
@endsection