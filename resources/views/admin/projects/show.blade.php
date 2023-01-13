@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="py-3 mt-3"> {{$project->title}} </h1>
        <h5>{{$project->created_at}}</h5>
        <div>
            <img src="{{ asset('storage/' . $project->image)}}" alt="">
        </div>
        <p class="py-3 mt-3">{{$project->description}}</p>
    </div>
@endsection