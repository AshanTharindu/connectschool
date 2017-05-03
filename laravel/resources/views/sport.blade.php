@extends('layouts.master')

@section('title')
    Sports
@endsection

@section('heading')
    sport news
@endsection


@section('content')


    @foreach($posts as $post)
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
                    <small><cite title="Source Title"></cite></small>
                </blockquote>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    @endforeach


@endsection
