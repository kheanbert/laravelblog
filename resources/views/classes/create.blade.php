@extends('layouts.app')

@section('content')
    <div class="row">
        <div class ="col-sm-8 offset-sm-2">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br/>
        @endif
        </div>
        <div class="col-sm-8 offset-sm-2">
            <form method="post" action="{{ route('class.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control"  name="name"/>
                </div>
                <div class="form-group">
                    <label for="technology">Technology:</label>
                    <input type="text" class="form-control" name="technology"/>
                </div>
                <div class="form-group">
                    <label for="grade">Grade:</label>
                    <input type="text" class="form-control" name="grade"/>
                </div>
                <div class="form-group">
                    <label for="Teacher">Teacher:</label>
                    <select class="form-control" name="teacher_id" required>
                        <option value="">--- Select Teacher ---</option>
                        @foreach($teachers as $teacher)
                            <option value="{!! $teacher->id !!}">{!! $teacher->name !!}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Subject:</label>
                    <select class="js-example-basic-multiple select2-hidden-accessible" multiple="true" name="subject_id[]" style="width:100%" tabindex="-1" aria-hidden="true">
                        @foreach($subjects as $subject)
                            <option value="{!! $subject->id !!}">{!! $subject->subject_name !!}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary-outline">Create</button>
            </form>
        </div>
    </div>
@endsection