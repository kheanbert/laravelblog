@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a user</h1>

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
            <form method="post" action="{{ route('user.update')}}">
                <input type ="hidden" name="id" value ={{$user->id}} />
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value={!!$user->name !!} />
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value={!!$user->email!!} />
                </div>

                <div class="form-group">
                    <label for="email_verified_at">Email verified at:</label>
                    <input type="text" class="form-control" data-date-format='yyyy-mm-dd'  id="datepicker" name="email_verified_at"
                           value={!!$user->email_verified_at !!} />
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" class="form-control" name="password" value={!!$user->password !!} />
                </div>
                <div class="form-group">
                    <label for="first_name">First name:</label>
                    <input type="text" class="form-control" name="first_name" value={!! $user->first_name !!} />
                </div>
                <div class="form-group">
                    <label for="last_name">Last name:</label>
                    <input type="text" class="form-control" name="last_name" value="{!! $user->last_name !!}" />
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