@extends('layouts.main')

@section('content')
<!-- wines list page -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Wines list</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Region</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wines as $wine)
                    <tr>
                        <th scope="row">{{ $wine->id }}</th>
                        <td>{{ $wine->name }}</td>
                        <td>{{ $wine->type }}</td>
                        <td>{{ $wine->price }}</td>
                        <td>{{ $wine->quantity }}</td>
                        <td>{{ $wine->region }}</td>
                        <td>
                            <a href="{{ route('edit', $wine->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('delete', $wine->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>






@endsection