@extends('layouts.master')

@section('title')
    send note
@endsection

@section('heading')
    Send Note
@endsection


@section('content')

    <form action="{{route('send')}}" method="post">

            <div class="box box-info">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
            <i class="fa fa-envelope"></i>

            <h3 class="box-title">Note</h3>
        <!-- tools box -->
    <div class="pull-right box-tools">


            </div>

            <div class="box-body">

            <div class="form-group">
                <label for="exampleInputEmail1">Select User</label>
                <select class="form-control" id="receiver" name="receiver">
                    @foreach($users as $user)
                        <option>{{$user->id}}</option>
                    @endforeach

                </select>

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Subject</label>
            <input type="text" class="form-control" name="subject" placeholder="Subject">
            </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Body</label>
                    <textarea class="form-control" name="body" id="new-note" rows="5"></textarea>
                </div>
            <div class="box-footer clearfix">
            <button type="submit" class="pull-right btn btn-default" id="sendEmail">Send
            <i class="fa fa-arrow-circle-right"></i></button>
                <input type="hidden" name = "_token" value = "{{Session::token()}}">
            </div>
            </div>
    </form>


@endsection