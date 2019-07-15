@extends('layouts.app')

@section('content')
    <div >
        <a style="margin:19px;" href="{{route('students.create')}}" class="btn btn-primary">New student</a>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>First name</td>
                <td>Last name</td>
                <td>Birthday</td>
                <td>Gmail</td>
                <td>Grade</td>
                <td>Description</td>
                <td>Age</td>
                <td>Actions</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->first_name}}</td>
                    <td>{{$student->last_name}}</td>
                    <td>{{$student->birthday}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->grade}}</td>
                    <td>{{$student->description}}</td>
                    <td>{{$student->age}}</td>
                    <td>
                        <a href="{{ route('students.edit',$student->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('students.destroy', $student->id)}}" method="post">
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