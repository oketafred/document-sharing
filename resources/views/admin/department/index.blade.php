@extends('admin.adminlayout')

@section('title', 'All Departments')

@section('content')
	<section class="content-header">
      <h1>
        <i class="fa fa-users"></i> All Department
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Department</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      	<div class="col-md-12">
      		<div class="box box-info">
            <div class="box-header with-border">
              <a href="{{ route('department') }}" class="btn btn-sm btn-info pull-left"> Add New User</a>

              <div class="box-tools pull-right">
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table table-hover table-striped table-sm">
                	<thead>
                		<tr>
                			<th>#</th>
                			<th>Department Name</th>
                			<th>Action</th>
                		</tr>
                	</thead>
                	<tbody>
                		@foreach($departments as $department)
							<tr>
								<td>{{ $department->id }}</td>
								<td>{{ $department->name }}</td>
								<td><a href="#" class="btn btn-primary btn-sm">View Details</a></td>
								<td><a href="#" class="btn btn-danger btn-sm">Lock</a></td>
							</tr>
                		@endforeach
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
@endsection