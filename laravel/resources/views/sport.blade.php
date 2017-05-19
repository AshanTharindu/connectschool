@extends('layouts.master')

@section('title')
    Sports
@endsection

@section('heading')
    sport news
@endsection


@section('content')


    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-6">
            <div class="box box-solid">


                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>



                    <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body clearfix">
                    <blockquote class="pull-right">
                        <p>{{$post->body}}</p>

                        @php
                        $captain = \App\Captain::where('id',$post->captain_id)->first();
                        $student = \App\Student:: where('user_id',$captain->user_id)->first();
                        $name = $student->first_name." ".$student->last_name;
                        @endphp
                        <small><cite title="Source Title"></cite>{{$name}}</small>
                    </blockquote>
                </div>

                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <br/>
    <br/>

    @endforeach


@endsection
