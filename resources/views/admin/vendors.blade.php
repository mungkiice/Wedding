@extends('admin.app')
@section('page', 'Vendor')
@section('section', 'Data tables')
@section('content')

<!-- Content Header (Page header) -->

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table</h3>
          <a href="/admin/vendor/create" class="btn btn-success" style="position: relative; float: right;">
            <i class="fa fa-plus"></i>
            <span>Add Vendor</span>
          </a>
        </div>
        <div class="box">
<!--             <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Information</th>
                    <th>Price</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	@foreach($vendors as $vendor)
                  <tr>
                    <td>{{$vendor->name}}</td>
                    <td>{{$vendor->category->name}}</td>
                    <td style="max-width: 300px;">{{$vendor->information}}</td>
                    <td style="text-align: right;">Rp. {{number_format($vendor->price)}}</td>
                    <td style="max-width: 100px;">
                      <img style="width: 100%" src="/storage/{{$vendor->photo}}">
                    </td>
                    <td style="max-width: 30px;">
                      <a style="width: 100%; margin-bottom: 5px;" class="btn btn-primary" href="/admin/vendor/{{$vendor->id}}/edit">Edit</a>
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