@extends('admin.app')
@section('page', 'Galeri')
@section('section', 'Form Ubah')
@section('content')

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Form Ubah</h3>
				</div>
				<form method="POST" action="/admin/gallery/{{$gallery->id}}">
					{{csrf_field()}}
					{{method_field('PUT')}}
					<div class="box-body">
						<div class="form-group">
							<label>Vendor</label>
							<select class="form-control select2" multiple="multiple"data-placeholder="Select vendor(s)" style="width: 100%;" name="vendorID[]">
								@foreach($vendors as $vendor)
								<option value="{{$vendor->id}}">{{$vendor->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Pasangan Artis</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="celeb" value="{{$gallery->celeb}}">
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-primary" style="float: right;">Perbarui</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Daftar Foto</h3>
				</div>
				<!-- <div class="box-body"> -->
					<table class="table table-bordered table-striped">
						<thead>
							<th>Foto</th>
							<th style="max-width: 20px;">Aksi</th>
						</thead>
						<tbody>
							@foreach($gallery->photos as $photo)
							<tr>
								<td style="width: 500px;">
									<img style="max-width: 150px;" src="/storage/{{$photo->path}}">
								</td>
								<td>
									<a style="width: 100%" class="btn btn-danger" data-toggle="modal" data-target="#modal-warning-{{$photo->id}}">Hapus</a>
								</td>
							</tr>
							<div class="modal modal-warning fade" id="modal-warning-{{$photo->id}}">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title">Konfirmasi Penghapusan</h4>
											</div>
											<div class="modal-body">
												<p>Apakah anda yakin ingin menghapus Foto ini?</p>
											</div>
											<div class="modal-footer">
												<form method="POST" action="/admin/photo/{{$photo->id}}">
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
							<tfoot>
								<tr>
									<form method="POST" action="/admin/gallery/{{$gallery->id}}" enctype="multipart/form-data">
										<td>
											{{csrf_field()}}
											{{method_field('PUT')}}
											<input type="file" name="photo">
										</td>
										<td>
											<button type="submit" class="btn btn-success" style="width: 100%"><i class="fa fa-plus"></i><span>Tambah Foto</span></button>	
										</td>
									</form>
								</tr>
							</tfoot>
						</table>
					<!-- </div> -->
				</div>
			</div>	
		</div>
	</section>
	@endsection