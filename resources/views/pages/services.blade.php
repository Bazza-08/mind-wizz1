@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    {{-- First check for the services array from the Pages controller --}}
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection