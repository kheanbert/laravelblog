@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a class</h1>

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
            <form method="post" action="{{ route('class.update') }}">
                <input type="hidden" name="id" value="{{$class->id}}" />
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value={{ $class->name }} />
                </div>
                <div class="form-group">
                    <label for="technology">technology:</label>
                    <input type="text" class="form-control" name="technology" value={{ $class->technology }} />
                </div>
                <div class="form-group">
                    <label for="grade">Grade:</label>
                    <input type="text" class="form-control" name="grade" value={{ $class->grade }} />
                </div>
                <div class="form-group">
                    <label for="Teacher">Teacher:</label>
                    <select class="form-control" name="teacher_id" required>
                        <option value="">--- Select Teacher ---</option>
                        @foreach($teachers as $teacher)
                            <option value="{!! $teacher->id !!}"
                                @if ($teacher->id == $class->teacher->id) selected
                                @endif>{!! $teacher->name !!}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Subject:</label>
                    <select class="js-example-basic-multiple select2-hidden-accessible form-control" multiple="true" name="subject_id[]" style="width:100%" tabindex="-1" aria-hidden="true">
                        @foreach($subjects as $subject)
                            <option value="{!! $subject->id !!}" {!! in_array($subject->id, $subjectIds) ? 'selected' : '' !!}>{!! $subject->subject_name !!}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection