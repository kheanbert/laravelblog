@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a student</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('students.update')}}">
                <input type ="hidden" name="id" value ={{$student->id}} />
                @method('PATCH')
                @csrf
                <div class="form-group">

                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" name="first_name" value={{ $student->first_name }} />
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" value={{ $student->last_name }} />
                </div>

                <div class="form-group">
                    <label for="birthday">birthday:</label>
                    <input type="text" class="form-control" name="birthday" id="datepicker" value={{ $student->birthday }} />
                </div>
                <div class="form-group">
                    <label for="email">email:</label>
                    <input type="text" class="form-control" name="email" value={{ $student->email }} />
                </div>
                <div class="form-group">
                    <label for="grade">Grade:</label>
                    <input type="text" class="form-control" name="grade" value={{ $student->grade }} />
                </div>
                <div class="form-group">
                    <label for="description">description:</label>
                    <input type="text" class="form-control" name="description" value={{ $student->description }} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $( "#datepicker" ).datepicker();
        } );
    </script>
@endsection