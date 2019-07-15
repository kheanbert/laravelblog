@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>
              </span>
                            Dashboard
                        </h3>
                    </div>
                    <div class="row">
                        @foreach($classes as $class)
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-danger card-img-holder text-white">
                                <div class="card-body">
                                    <h2 class="mb-5">{!!$class->name!!}</h2>
                                    <h6 class="card-text">subject:{!!$class->subject!!}</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-info card-img-holder text-white">
                                <div class="card-body">
                                    {{--<h4 class="font-weight-normal mb-3">Weekly Orders--}}
                                    {{--<i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>--}}
                                    {{--</h4>--}}
                                    {{--<h2 class="mb-5">45,6334</h2>--}}
                                    {{--<h6 class="card-text">Decreased by 10%</h6>--}}
                                </div>
                            </div>
                        </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection