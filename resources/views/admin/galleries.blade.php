@extends('admin.app')
@section('page', 'Gallery')
@section('section', 'Data tables')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table</h3>
          <a href="/admin/gallery/create" class="btn btn-success" style="position: relative; float: right;">
            <i class="fa fa-plus"></i>
            <span>Add Gallery</span>
          </a>
        </div>


        <div class="box">
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
                  <ol>
                    @foreach($gallery->vendors as $vendor)
                    <li>{{$vendor->name}}</li>
                    @endforeach
                  </ol>
                </td>
                <td style="max-width: 50px">
                  <img style="width: 100%" src="/storage/{{optional($gallery->photos->first())->path}}">
                </td>
                <td style="width: 30px;">
                  <a style="width: 100%; margin-bottom: 5px;" class="btn btn-primary" href="/admin/gallery/{{$gallery->id}}/edit">Edit</a>
                  <br>
                  <a style="width: 100%" class="btn btn-danger" data-toggle="modal" data-target="#modal-warning-{{$gallery->id}}">Delete</a>
                </td>
              </tr>
              <div class="modal modal-warning fade" id="modal-warning-{{$gallery->id}}">
                <div class="modal-dialog">
                  <div class="modal-content"> 
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Delete Confirmation</h4>
                      </div>
                      <div class="modal-body">
                        <p>Apakah anda yakin ingin menghapus Gallery "{{$gallery->celeb}}"?</p>
                      </div>
                      <div class="modal-footer">
                        <form method="POST" action="/admin/gallery/{{$gallery->id}}">
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