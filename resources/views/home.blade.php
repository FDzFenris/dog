@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="flex-center position-ref full-height">


                            <div class="content">
                                <div class="title m-b-md">
                                    LINK
                                </div>

                                <div class="links">
                                    <a href="{{ route('dog_all') }}">dog_all</a>
                                </div>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
