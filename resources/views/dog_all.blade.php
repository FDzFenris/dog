



@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">  <h2>  INFO</h2></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif





                        <div class="row">
                            <form action="{{route('dog_add')}}" method="post">
                                {{ csrf_field() }}
                                <input type="text" name="name">
                                <input type="text" name="age">
                                <button type="submit">send</button>

                                {{--        {{route('dog_show')}}--}}

                                <table class="table">
                                    <thead class="bg-secondary">
                                    <tr>
                                        <th>name</th>
                                        <th>age</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($dog_info as $key=>$value)


                                    <tr>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->age }}  ==>  <a href="{{    route('showtakeup', ['id' => $value->id ]) }}"><button  type="button"  class="btn-dark">watch</button> </a>  </td>
                                    </tr>
                                    @endforeach
                                    </tbody>

                                </table>

                            </form>
                        </div>

                        <div class="row">
                          {{--  {{$showtakeup}}--}}




<?php
                            $users = DB::table('users')->select('name', 'email as user_email')->get();

?>
                            @foreach ($users as $key=>$user)

                            {{$user->name}}
                            @endforeach

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
