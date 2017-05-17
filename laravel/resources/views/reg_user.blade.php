@extends('layouts.master')

@section('title')
    create users
@endsection

@section('heading')
    Create Users
@endsection


@section('content')

    <div class="col-md-12">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">student</a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">class teacher</a></li>
                <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">subject teacher</a></li>
                <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">parent</a></li>
                <li class=""><a href="#tab_5" data-toggle="tab" aria-expanded="false">captain</a></li>
                <li class=""><a href="#tab_6" data-toggle="tab" aria-expanded="false">chairperson</a></li>
                <li class=""><a href="#tab_7" data-toggle="tab" aria-expanded="false">admin</a></li>
                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">

                </div>

                <div class="tab-pane active" id="tab_4">

                </div>

                <div class="tab-pane" id="tab_5">

                </div>

                <div class="tab-pane" id="tab_6">

                </div>

                <div class="tab-pane" id="tab_7">

                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
    </div>

@endsection