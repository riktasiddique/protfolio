@extends('layouts.app')
@section('title', 'Create About')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
    <div class="card text-center">
        <div class="card-header">
            <p>#{{$about->id}}</p>
        </div>
        <div class="card-body">
            <h5 class="card-title">Post: {{$about->post}}</h5>
            <p class="card-text">Language2: {{$about->language2}}</p>
            <p class="card-text">Language3: {{$about->language3}}</p>
            <p class="card-text">Language4: {{$about->language4}}</p>
            <p class="card-text">Language2: {{$about->language2}}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
           {{$about->created_a}}
        </div>
        </div>
    </div>
</div>
@endsection