@extends('user.userlayout')

@section('title', 'My Departments')

@section('content')
	<section class="content-header">
      <h1>
        <i class="fa fa-building"></i> My Departments
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-building"></i> Home</a></li>
        <li class="active">My Documents</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      	<div class="col-md-12">
      		<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">My Documents</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Department Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Finance Department</td>
                    <td><a href="#" class="btn btn-success btn-sm">Connect Now</a></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Information Technology Department</td>
                    <td><a href="#" class="btn btn-success btn-sm">Connect Now</a></td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
          </div>
      	</div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection