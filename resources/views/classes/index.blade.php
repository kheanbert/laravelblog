@extends('layouts.app')

@section('content')
    <div >
        <a style="margin:19px;" href="{{route('class.create')}}" class="btn btn-primary">New class</a>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Technology</td>
                <td>Grade</td>
                <td>Teacher</td>
                <td>Actions</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @foreach($classes as $class)
                <tr>
                    <td>{{$class->id}}</td>
                    <td>{{$class->name}}</td>
                    <td>{{$class->technology}}</td>
                    <td>{{$class->grade}}</td>
                    <td>{{$class->teacher->name}}</td>
                    <td>
                        <a href="{{ route('class.edit',$class->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <a href="{{ route('class.show',$class->id)}}" class="btn btn-info">Show</a>
                    </td>
                    <td>
                        <form action="{{ route('class.delete', $class->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    <div>
@endsection