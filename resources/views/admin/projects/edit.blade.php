@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="py-3 mt-3"> Project changes </h2>
        <div class="row">
            <div class="col-10">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ $project->title }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $project->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-info mt-3">Save changes</button>
                </form>
            </div>
        </div>
    </div>
@endsection