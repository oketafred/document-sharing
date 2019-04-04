@extends('user.userlayout')

@section('title', 'User Dashboard')

@section('content')
	<section class="content-header">
      <h1>
        <i class="fa fa-file-pdf-o"></i> My Documents
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
                    <th>Uploaded_At</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>OR9842</td>
                    <td>Information Technology Department</td>
                    <td>4 hours ago</td>
                  </tr>
                  <tr>
                    <td>OR9842</td>
                    <td>Finance Department</td>
                    <td>12 minutes ago</td>
                  </tr>
                  <tr>
                    <td>OR9842</td>
                    <td>Loan Department</td>
                    <td>7 days ago</td>
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