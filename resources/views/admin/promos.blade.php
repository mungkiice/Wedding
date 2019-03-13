@extends('admin.app')
@section('page', 'Promo')
@section('section', 'Tabel Data')
@section('content')

<!-- Content Header (Page header) -->

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Data</h3>
          <a href="/admin/promo/create" class="btn btn-success" style="position: relative; float: right;">
            <i class="fa fa-plus"></i>
            <span>Tambah Promo</span>
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
                    <th>Id</th>
                    <th>Gambar</th>
                  </tr>
                </thead>
                <tbody>
                	@foreach($promos as $promo)
                  <tr>
                    <td>{{$promo->id}}</td>
                    <td style="max-width: 100px;">
                      <img style="width: 240px" src="/storage/{{$promo->image}}">
                    </td>
                    <td style="max-width: 30px;">
                      <a style="width: 100%; margin-bottom: 5px;" class="btn btn-primary" href="/admin/promo/{{$promo->id}}/edit">Ubah</a>
                      <br>
                      <a style="width: 100%" class="btn btn-danger" data-toggle="modal" data-target="#modal-warning-{{$promo->id}}">Hapus</a>
                    </td>
                  </tr>
                  <div class="modal modal-warning fade" id="modal-warning-{{$promo->id}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Konfirmasi Penghapusan</h4>
                          </div>
                          <div class="modal-body">
                            <p>Apakah anda yakin ingin menghapus Promo "{{$promo->id}}"?</p>
                          </div>
                          <div class="modal-footer">
                            <form method="POST" action="/admin/promo/{{$promo->id}}">
                              {{csrf_field()}}
                              {{method_field('DELETE')}}
                              <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn btn-outline">Yes</button>
                            </form>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
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