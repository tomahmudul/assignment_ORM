@extends('layouts.app')

@section('title', 'Create location')

@section('contents')
    <h1 class="mb-0">Add location</h1>
    <hr />
    <form action="{{ route('locations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="code" class="form-control" placeholder="Code">
            </div>
        </div>


        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
