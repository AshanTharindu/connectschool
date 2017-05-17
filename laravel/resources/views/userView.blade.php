@extends('layouts.master')

@section('title')
    Users
@endsection

@section('heading')
    Users
@endsection


@section('content')



    <div class="col-md-10">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">All Users</a></li>
                <li><a href="#tab_2" data-toggle="tab">Students</a></li>
                <li><a href="#tab_3" data-toggle="tab">Class Teacher</a></li>
                <li><a href="#tab_4" data-toggle="tab">Subject Teacher</a></li>
                <li><a href="#tab_5" data-toggle="tab">Captains</a></li>
                <li><a href="#tab_6" data-toggle="tab">ChairPersons</a></li>
                <li><a href="#tab_7" data-toggle="tab">Parents</a></li>
                <li><a href="#tab_8" data-toggle="tab">Admins</a></li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">

                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                        <thead>
                                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">User ID</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">User Type</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Name</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Email</th></tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($users as $user)

                                                            <?php
                                                            $name = "";
                                                            $userID= $user->id;
                                                            $userType = $user->user_type;
                                                            $email = $user->email;

                                                            if($userType=="admin"){
                                                                $admin = \App\Admin::where('user_id',$userID)->first();
                                                                $name = $admin->first_name." ".$admin->last_name;
                                                            }elseif($userType=="parent"){
                                                                $guardian = \App\Guardian::where('user_id',$userID)->first();
                                                                $name = $guardian->first_name." ".$guardian->last_name;
                                                            }elseif($userType=="student"){
                                                                $student = \App\Student::where('user_id',$userID)->first();
                                                                $name=$student->first_name." ".$student->last_name;
                                                            }elseif($userType=="captain"){
                                                                $student = \App\Student::where('user_id',$userID)->first();
                                                                $name=$student->first_name." ".$student->last_name;

                                                            }elseif($userType=="chperson"){
                                                                $student = \App\Student::where('user_id',$userID)->first();
                                                                $name=$student->first_name." ".$student->last_name;

                                                            }elseif($userType=="class_teacher"){
                                                                $classTeacher = \App\ClassTeacher::where('user_id',$userID)->first();
                                                                $name=$classTeacher->first_name." ".$classTeacher->last_name;


                                                            }elseif($userType=="subject_teacher"){
                                                                $subjectTeacher = \App\SubjectTeacher::where('user_id',$userID)->first();
                                                                $name=$subjectTeacher->first_name." ".$subjectTeacher->last_name;

                                                            }
                                                            ?>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1">{{$userID}}</td>
                                                                <td>{{$userType}}</td>
                                                                <td>{{$name}}</td>
                                                                <td>{{$email}}</td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                        </div>

                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->

                                                                <!-- /.box -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </section>

                </div>

            </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_4">

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_5">

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_6">

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_7">

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_8">

                </div>





                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
    </div>


@endsection