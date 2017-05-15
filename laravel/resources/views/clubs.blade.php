@extends('layouts.master')

@section('title')
    clubs&societies
@endsection

@section('heading')
    Clubs And Societies news
@endsection


@section('content')



        @foreach($posts as $post)

            <div class="row">
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <i class="fa fa-text-width"></i>

                            <h3 class="box-title">Science Day</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body clearfix">
                            <blockquote class="pull-right">
                                <p>{{$post->body}}</p>
                                @php
                                    $chperson = \App\Chperson::where('id',$post->chperson_id)->first();
                                    $student = \App\Student:: where('user_id',$chperson->user_id)->first();
                                    $name = $student->first_name." ".$student->last_name;
                                @endphp
                                <small>{{$name}}<cite title="Source Title"></cite></small>
                            </blockquote>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

            </div>


    @endforeach

@endsection
