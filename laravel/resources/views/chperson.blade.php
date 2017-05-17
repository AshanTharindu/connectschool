@extends('layouts.master')

@section('title')
    chairpersons
@endsection

@section('heading')
    Register Chairpersons
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
            <h3 class="box-title">Chairperson</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start chairperson -->
        <form action="{{route('chpersonsignup')}}" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Student ID</label>
                    <div class="row">
                        <div class="col-md-4">
                            <select class="form-control" id="student_id" name="student_id">
                                @php $student = \App\Student::all(); @endphp
                                @foreach($student as $student)
                                    <option>{{$student->id}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group {{$errors->has('year') ? 'has-error' : ''}}">
                    <label for="exampleInputEmail1">Year</label>
                    <input type="text" class="form-control" id="year" name="year" placeholder="year" value="{{Request::old('year')}}">
                </div>
                <div class="form-group {{$errors->has('club') ? 'has-error' : ''}}">
                    <label for="exampleInputEmail1">Club</label>
                    <input type="text" class="form-control" id="club" name="club" placeholder="club" value="{{Request::old('club')}}">
                </div>

            </div>
            <!-- /.box-body -->
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">Register</button>
                <input type="hidden" name = "_token" value = "{{Session::token()}}">
            </div>

            <div class="box-footer">


            </div>
        </form>
    </div>



@endsection