@extends('admin.app')
@section('page', 'Layanan')
@section('section', 'Form')
@section('content')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="box box-info">
        <!-- /.box-header -->
        <div class="box-body pad">
          <form method="POST" action="/admin/service"enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label>Kategori Layanan</label>
              <select class="form-control select2" style="width: 100%;" name="category">
                <option value="PL Malang">PL Malang</option>
                <option value="PL Jawa Tengah">PL Jawa Tengah</option>
                <option value="PL Bali">PL Bali</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Foto Vendor</label>
              <input type="file" id="exampleInputFile" name="photo">
            </div>
            <button type="submit" class="btn btn-success" style="margin-top: 20px; float: right;">Buat</button>
          </form>
        </div>
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
  @endsection