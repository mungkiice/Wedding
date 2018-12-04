@extends('admin.app')

@section('content')
<!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Text Editors
          <small>Advanced form element</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Forms</a></li>
          <li class="active">Editors</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">CK Editor
                  <small>Advanced and full of features</small>
                </h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                  <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
                  <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                  title="Remove">
                  <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body pad">
                <form method="POST" action="/admin/aboutus">
                  {{csrf_field()}}
                  <textarea id="editor1" rows="10" cols="80" name="text">
                    {{$aboutUs->text}}
                  </textarea>
                  <button type="submit" class="btn btn-success">Post</button>
                </form>
              </div>
            </div>

            <!-- /.col-->
          </div>
          <!-- ./row -->
        </section>
        <!-- /.content -->
@endsection