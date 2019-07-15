@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Show a class</h1>
            <form method="post" action="{{ route('class.update') }}">
                <input type="hidden" name="id" value="{{$class->id}}" />
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <span class="form-control" name="name">{{ $class->name }}</span>
                </div>
                <div class="form-group">
                    <label for="technology">technology:</label>
                    <span class="form-control" name="technology">{{ $class->technology }}</span>
                </div>
                <div class="form-group">
                    <label for="grade">Grade:</label>
                    <span class="form-control" name="grade">{{ $class->grade }}</span>
                </div>
                <div class="form-group">
                    <label for="Teacher">Teacher:</label>
                    <span class="form-control">{!! $teacher->name !!}</span>
                </div>
                <div class="form-group">
                    <label>Subject:</label>
                    @foreach($subjects as $subject)
                        @if(in_array($subject->id, $subjectIds))
                            <span class="form-control">{!! $subject->subject_name !!}</span>
                        @endif
                    @endforeach
                </div>
                <a  class="btn btn-primary" href="{!! route('class.index') !!}">Back to the list</a>
            </form>
        </div>
    </div>
@endsection