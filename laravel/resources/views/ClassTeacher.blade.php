@extends('layouts.master')

@section('title')
    class teacher
@endsection

@section('heading')
    Register Class Teachers
@endsection

@section('content')
    @if(count($errors)>0)
        <div class="alert alert-danger alert-dismissible">
            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul>
                    @foreach($errors->all() as $error)

                        <li>{{$error}}</li>

                    @endforeach
                </ul>


            </div>
        </div>

    @endif

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Class Teacher</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{route('classsignup')}}" method="post">
            <div class="box-body">
                <div class="form-group {{$errors->has('first_name') ? 'has-error' : ''}}">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="first name" value="{{Request::old('first_name')}}">

                </div>
                <div class="form-group {{$errors->has('last_name') ? 'has-error' : ''}}">
                    <label for="exampleInputEmail1">Last name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last name" value="{{Request::old('last_name')}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Grade</label>
                    <select class="form-control" id="grade" name="grade">
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Class</label>
                    <select class="form-control" id="class_name" name="class_name">
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                        <option>D</option>
                        <option>T</option>
                    </select>
                </div>
                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{Request::old('email')}}">
                </div>
                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                <input type="hidden" name = "_token" value = "{{Session::token()}}">
            </div>
        </form>
    </div>


@endsection