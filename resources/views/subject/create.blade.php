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
            <form method="post" action="{{ route('subject.store') }}">
                @csrf
                <div class="form-group">
                    <label for="subject_name">Subject name:</label>
                    <input type="text" class="form-control"  name="subject_name"/>
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" name="description"/>
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