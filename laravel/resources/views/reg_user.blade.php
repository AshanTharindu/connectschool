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
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Student</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form action="{{route('studentsignup')}}" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="first name">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last name">
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
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Parent id</label>
                                    <select class="form-control" id="guardian_id" name="guardian_id">
                                        <?php
                                            $guardians = \App\Guardian::all();
                                            foreach($guardians as $guardian){?>
                                                <option> <?php echo $guardian->id;?></option>

                                            <?php }?>


                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
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
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Class Teacher</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form action="{{route('classsignup')}}" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="first name">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">class</label>
                                    <input type="text" class="form-control" id="class_name" name="class_name" placeholder="class name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
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
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Subject Teacher</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start subject teacher -->
                        <form action="{{route('subjectsignup')}}" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="first name">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="subject">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
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
                </div>

                <div class="tab-pane active" id="tab_4">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Parent</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start parent -->
                        <form action="{{route('parentsignup')}}" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="first name">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="phone number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
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
                </div>

                <div class="tab-pane" id="tab_5">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Captain</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start captain-->
                        <form action="{{route('captainsignup')}}" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="first name">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sport</label>
                                    <input type="text" class="form-control" id="sport" name="sport" placeholder="sport">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
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
                </div>

                <div class="tab-pane" id="tab_6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Chairperson</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start chairperson -->
                        <form action="{{route('chpersonsignup')}}" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="first name">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Club</label>
                                    <input type="text" class="form-control" id="club" name="club" placeholder="club">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
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
                </div>

                <div class="tab-pane" id="tab_7">
                    <form action="{{route('adminsignup')}}" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="first name">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
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
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
    </div>

@endsection