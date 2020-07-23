@extends('layout.base')
@section('content')
    <div class="content">
        <p>{{$nim}}</p>
        
        @if($nilai=='A')
            <p>anak pintar</p>
        @endif
    </div>
@endsection