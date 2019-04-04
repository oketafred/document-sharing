<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("assets/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Sentinel::getUser()->last_name }} {{ Sentinel::getUser()->first_name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active">
          <a href="{{ route('user-dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Departments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all_department') }}"><i class="fa fa-circle-o"></i> View All Departments</a></li>
            <li><a href="{{ route('department') }}"><i class="fa fa-circle-o"></i> Add New Department</a></li>
          </ul>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-file-pdf-o"></i> <span>Uploads</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all_users')}}"><i class="fa fa-circle-o"></i> View All Users</a></li>
            <li><a href="{{ route('register') }}"><i class="fa fa-circle-o"></i> Add New User</a></li>
          </ul>
        </li>
        
        


        <li><a href="https://adminlte.io/docs"><i class="fa fa-gear"></i> <span>Settings</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>