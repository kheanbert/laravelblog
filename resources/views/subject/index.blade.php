@extends('layouts.app')

@section('content')
    <div>
        <a style="margin:19px;" href="{{route('subject.create')}}" class="btn btn-primary">New subject</a>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Subject name</td>
                <td>Description</td>
                <td>Actions</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @foreach($subjects as $subject)
                <tr>
                    <td>{{$subject->id}}</td>
                    <td>{{$subject->subject_name}}</td>
                    <td>{{$subject->description}}</td>
                    <td>
                        <a href="{{ route('subject.edit',$subject->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('subject.delete', $subject->id)}}" method="post">
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