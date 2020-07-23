@extends('layout.base')
@section('content')
    @foreach ($dataInput as $item)
        {{ $item['nim'] }}
    @endforeach
@endsection