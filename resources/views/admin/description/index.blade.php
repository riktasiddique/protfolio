@extends('layouts.app')
@section('title', 'All Home Page')
@section('content')
<div class="calender-area mg-tb-30">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table text-light table-bordered">
                    <thead>
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                                </tr>
                    </thead>
                    <tbody>
                        @foreach($descriptions as $description)
                        <tr>
                                    <th scope="row">{{$description->id}}</th>
                                    <td>{{$description->description}}</td>
                                    <td>
                                    <form action="{{route('description.destroy', $description->id)}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delate</button>
                                    </form>
                                    </td>
                                    <td>
                                        <a href="{{route('description.edit', $description->id)}}" class="btn btn-primary">Edit</a>
                                    </td>
                                    
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection