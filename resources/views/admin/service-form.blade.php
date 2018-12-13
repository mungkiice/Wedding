@extends('admin.app')
@section('page', 'Layanan')
@section('section', 'Form')
@section('content')
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-info">
              <!-- /.box-header -->
              <div class="box-body pad">
                <form method="POST" action="/admin/service">
                  {{csrf_field()}}
                  <textarea id="editor1" rows="10" cols="80" name="text">
                    {!!$service->text!!}
                  </textarea>
                  <button type="submit" class="btn btn-success" style="margin-top: 20px; float: right;">Perbarui</button>
                </form>
              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- ./row -->
        </section>
        <!-- /.content -->
@endsection