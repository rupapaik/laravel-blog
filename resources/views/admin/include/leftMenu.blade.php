<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category Control<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/category/save')}}">Create New Category</a>
                    </li>
                    <li>
                        <a href="{{url('/category/allcategory')}}">View All Categories</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{url('/blog/index')}}"><i class="fa fa-files-o fa-fw"></i> Blogs<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                      <a href="{{url('/blog/save')}}">Create Blog</a>
                    </li>
                    <li>
                        <a href="{{url('/blog/allblog')}}">View All Blogs</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
