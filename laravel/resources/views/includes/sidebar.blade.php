<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Ashan Tharindu</p>

            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="{{route('sports')}}">
                    <i class="glyphicon glyphicon-knight"></i> <span>Marks</span>
                    <ul class="treeview-menu menu-open" style="display: block;">
                        <li><a href="{{route('marksView')}}"><i class="fa fa-circle-o"></i> View Marks</a></li>
                        @if(Auth::user()->user_type == "class_teacher" or "admin")
                            <li><a href="{{route('enterMarks')}}"><i class="fa fa-circle-o"></i> Enter Marks</a></li>
                        @endif
                    </ul>

                </a>

            </li>
            <li class="active treeview">
                <a href="{{route('clubs')}}">
                    <i class="glyphicon glyphicon-knight"></i> <span>Sport</span>
                    <ul class="treeview-menu menu-open" style="display: block;">
                        <li><a href="{{route('sports')}}"><i class="fa fa-circle-o"></i> News</a></li>
                        @if(Auth::user()->user_type == "student")
                            <li><a href="{{route('spost')}}"><i class="fa fa-circle-o"></i> Add Event</a></li>
                        @endif
                    </ul>
                </a>
            </li>
            <li class="active treeview">
                <a href="{{route('clubs')}}">
                    <i class="glyphicon glyphicon-knight"></i> <span>Clubs and Societies</span>
                    <ul class="treeview-menu menu-open" style="display: block;">
                        <li><a href="{{route('clubs')}}"><i class="fa fa-circle-o"></i> News</a></li>
                        @if(Auth::user()->user_type == "student")
                            <li><a href="{{route('cpost')}}"><i class="fa fa-circle-o"></i> Add Event</a></li>
                        @endif
                    </ul>

                </a>

            </li>
            <li class="active treeview">
                <a href="{{route('messages')}}">
                    <i class="glyphicon glyphicon-knight"></i> <span>Messages</span>

                </a>

            </li>

            @if(Auth::user()->user_type == "admin")
                <li class="active treeview">
                    <a href="{{route('reg_user')}}">
                        <i class="glyphicon glyphicon-knight"></i> <span>Create Users</span>

                    </a>

                </li>

            @endif


    </section>
    <!-- /.sidebar -->
</aside>