@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
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
        </div>
        <div class="col-sm-8 offset-sm-2">
            <form method="post" action="{{ route('students.store') }}">
                @csrf
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control"  name="first_name"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" name="last_name"/>
                </div>

                <div class="form-group">
                    <label for="birthday">birthday:</label>
                    <input type="text" class="form-control" id="datepicker" name="birthday"/>
                </div>
                <div class="form-group">
                    <label for="email">email:</label>
                    <input type="text" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label for="grade">Grade:</label>
                    <input type="text" class="form-control" name="grade"/>
                </div>
                <div class="form-group">
                    <label for="description">description:</label>
                    <input type="text" class="form-control" name="description"/>
                </div>
                <div class="form-group">
                    <label for="age">age:</label>
                    <input type="text" class="form-control" name="age"/>
                </div>
                <button type="submit" class="btn btn-primary-outline">Create</button>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $( "#datepicker" ).datepicker();
        } );
    </script>
@endsection