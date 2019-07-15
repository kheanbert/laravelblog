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
            <form method="post" action="{{ route('subject.update')}}">
                <input type ="hidden" name="id" value ={{$subject->id}} />
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="subject_name">Subject name:</label>
                    <input type="text" class="form-control" name="subject_name" value={{ $subject->subject_name }} />
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" name="description" value={{ $subject->description }} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection