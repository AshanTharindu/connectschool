<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="" class="img-circle" alt="User Image">
            </div>
            <?php
            $name = "";
            $userID= Auth::user()->id;
            $userType = Auth::user()->user_type;
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
                $userType="captain";

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

            <div class="pull-left info">
                <p>{{$name}}</p>

            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="">
                    <i class="glyphicon glyphicon-knight"></i> <span>Marks</span>
                    <ul class="treeview-menu menu-open" style="display: block;">
                        @if(Auth::user()->user_type == "student" or Auth::user()->user_type == "capatain" or Auth::user()->user_type == "chperson" or Auth::user()->user_type == "parent")
                            <li><a href="{{route('marksView')}}"><i class="fa fa-circle-o"></i> View Marks</a></li>
                        @endif
                        @if(Auth::user()->user_type == "class_teacher" or Auth::user()->user_type == "subject_teacher")
                            <li><a href="{{route('enterMarks')}}"><i class="fa fa-circle-o"></i> Enter Marks</a></li>
                        @endif

                    </ul>

                </a>

            </li>
            <li class="active treeview">
                <a href="">
                    <i class="glyphicon glyphicon-knight"></i> <span>Sport</span>
                    <ul class="treeview-menu menu-open" style="display: block;">
                        <li><a href="{{route('sports')}}"><i class="fa fa-circle-o"></i> News</a></li>
                        @if(Auth::user()->user_type == "capatain")
                            <li><a href="{{route('spost')}}"><i class="fa fa-circle-o"></i> Add Event</a></li>
                        @endif
                    </ul>
                </a>
            </li>

            <li class="active treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-knight"></i>
                    <span>Clubs and Societies</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    <ul class="treeview-menu menu-open" style="display: block;">
                        <li><a href="{{route('clubs')}}"><i class="fa fa-circle-o"></i> News</a></li>
                        @if(Auth::user()->user_type == "chperson")
                            <li><a href="{{route('cpost')}}"><i class="fa fa-circle-o"></i> Add Event</a></li>
                        @endif
                    </ul>

                </a>

            </li>
            <li class="active treeview">
                <a href="">

                    <i class="glyphicon glyphicon-knight"></i> <span>Messages</span>

                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    <ul class="treeview-menu menu-open" style="display: block;">
                        <li><a href="{{route('sendnotes')}}"><i class="fa fa-circle-o"></i>Send</a></li>

                        <li><a href="{{route('viewnotes')}}"><i class="fa fa-circle-o"></i>view</a></li>



                    </ul>

                </a>

            </li>

            @if(Auth::user()->user_type == "admin")
                <li class="active treeview">
                    <a href="{{route('reg_user')}}">
                        <i class="glyphicon glyphicon-knight"></i> <span>Create Users</span>
                    </a>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    <ul class="treeview-menu menu-open" style="display: block;">
                        <li><a href="{{route('student')}}"><i class="fa fa-circle-o"></i>Student</a></li>

                        <li><a href="{{route('classteacher')}}"><i class="fa fa-circle-o"></i>Class Teacher</a></li>
                        <li><a href="{{route('subjectteacher')}}"><i class="fa fa-circle-o"></i>Subject Teacher</a></li>
                        <li><a href="{{route('guardian')}}"><i class="fa fa-circle-o"></i>Parent</a></li>
                        <li><a href="{{route('admin')}}"><i class="fa fa-circle-o"></i>Admin</a></li>
                        <li><a href="{{route('captain')}}"><i class="fa fa-circle-o"></i>Captain</a></li>
                        <li><a href="{{route('chperson')}}"><i class="fa fa-circle-o"></i>Chairperson</a></li>


                    </ul>



                </li>

            @endif
            <li class="active treeview">
                <a href="{{route('userview')}}">
                    <i class="glyphicon glyphicon-knight"></i> <span>View Users</span>

                </a>

            </li>


    </section>
    <!-- /.sidebar -->
</aside>