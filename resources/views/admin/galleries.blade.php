@extends('admin.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Celeb</th>
                  <th>Vendors</th>
                  <th>Photo</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                	@foreach($galleries as $gallery)
                <tr>
                  <td>{{$gallery->celeb}}</td>
                  <td>
                    @foreach($gallery->vendors as $vendor)
                    {{$vendor->name}} <br>
                    @endforeach
                  </td>
                  <td style="max-width: 50px">
                    <img style="width: 100%" src="/storage/{{$gallery->photo}}">
                  </td>
                  <td style="width: 30px;">
                    <a style="width: 100%; margin-bottom: 5px;" class="btn btn-primary" href="">Edit</a>
                    <br>
                    <a style="width: 100%" class="btn btn-danger" href="">Delete</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
<!--                 <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection