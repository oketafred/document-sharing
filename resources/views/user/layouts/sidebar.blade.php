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
        <li class="@if(Request::is('user/dashboard')) active  @endif">
          <a href="{{ route('user-dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>My Documents</span>
          </a>
        </li>
        <li class="@if(Request::is('user/my_departments')) active  @endif">
          <a href="{{ route('my_departments') }}">
            <i class="fa fa-dashboard"></i> <span>My Departments</span>
          </a>
        </li>
        <li>
          <a href="#"><i class="fa fa-gear"></i> <span>Settings</span></a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>