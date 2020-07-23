@extends('layout.base')
@section('content')
   <p>{{$nameInput}}</p>
   @foreach ($listMahasiswa as $item)
       <p>{{$item['nama']}}</p>
   @endforeach
@endsection