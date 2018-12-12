@extends('admin.app')
@section('page', 'Galeri')
@section('section', 'Tabel Data')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Data</h3>
          <a href="/admin/gallery/create" class="btn btn-success" style="position: relative; float: right;">
            <i class="fa fa-plus"></i>
            <span>Tambah Galeri</span>
          </a>
        </div>


        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Pasangan Artis</th>
                  <th>Vendor</th>
                  <th>Foto</th>
                  <th>Aksi</th>
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
                <td style="max-width: 50px" class="popup-gallery">
                    @foreach($gallery->photos as $photo)
                    <a href="/storage/{{$photo->path}}">
                      <img style="width: 100%" src="/storage/{{$photo->path}}">
                    </a>
                    @endforeach
                </td>
                <td style="width: 30px;">
                  <a style="width: 100%; margin-bottom: 5px;" class="btn btn-primary" href="/admin/gallery/{{$gallery->id}}/edit">Ubah</a>
                  <br>
                  <a style="width: 100%" class="btn btn-danger" data-toggle="modal" data-target="#modal-warning-{{$gallery->id}}">Hapus</a>
                </td>
              </tr>
              <div class="modal modal-warning fade" id="modal-warning-{{$gallery->id}}">
                <div class="modal-dialog">
                  <div class="modal-content"> 
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title">Konfirmasi Penghapusan</h4>
                    </div>
                    <div class="modal-body">
                      <p>Apakah anda yakin ingin menghapus Galeri "{{$gallery->celeb}}"?</p>
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
                </div>
              </div>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('custom-js')
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('.popup-gallery').each(function(){
      $(this).magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                  },
                  image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                  }
                });
    });
  });
</script>
@endsection
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
<style>
    .popup-gallery a{
        display:none;
    }
    .popup-gallery a:first-child{
        display:block;
    }
</style>
@endsection