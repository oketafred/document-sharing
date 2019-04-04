@extends('admin.adminlayout');

@section('title', 'Create Department')

@section('content')
	<section class="content-header">
      <h1>
        <i class="fa fa-user-circle"></i> Add New Department
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">New Department</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      	<div class="col-md-12">
      		<div class="box box-info">
            <div class="box-header with-border">
              <a href="{{ route('all_department') }}" class="btn btn-sm btn-info pull-left"> << List all Departments</a>

              <div class="box-tools pull-right">
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <form action="{{ route('department') }}" method="POST" data-parsley-validate>
		{{ csrf_field() }}

		<div class="form-group">

			@if (count($errors) > 0)

              @foreach($errors->all() as $error)

              <div class="alert alert-danger" role="alert">
                <strong>Error!</strong> {{ $error }}
              </div>
              @endforeach
              
             @endif

			@if(session('success'))
              <div class="alert alert-success" role="alert">
              <strong>Error!</strong> {{ session('success') }}.
              </div>
            @endif
		</div>
		
		<div class="form-group">
			<input type="text" name="department_name" class="form-control" placeholder="Department Name" required>
		</div>
		<div class="form-group">
			<textarea name="department_description" rows="5" class="form-control" placeholder="Department Description" required></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Add Department</button>
		</div>
	</form>
              </div>
              <!-- /.table-responsive -->
            </div>
          </div>
      	</div>
      </div>
      <!-- /.row -->
    </section>
@endsection