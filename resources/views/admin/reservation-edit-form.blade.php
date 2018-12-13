@extends('admin.app')
@section('page', 'Reservasi')
@section('section', 'Form Ubah')
@section('content')

<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-6">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Form Ubah</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form method="POST" action="/admin/reservation/{{$reservation->id}}" enctype="multipart/form-data">
					{{csrf_field()}}
					{{method_field('PUT')}}
					<div class="box-body">
						<div class="form-group">
							<label>Reservasi Atas Nama</label>
							<input type="text" class="form-control" value="{{$reservation->user->name}}" readonly>
						</div>
						<div class="form-group">
							<label>Paket Yang Dipilih</label>
							@foreach($reservation->packets as $packet)
							<div class="form-check" style="padding-left: 50px;">
								<input id="packet-{{$packet->id}}" type="checkbox" class="form-check-input" name="packetID[]" value="{{$packet->id}}" checked>
								<label class="form-check-label" for="packet-{{$packet->id}}">{{$packet->name}}</label>
							</div>
							@endforeach
						</div>
						<div class="form-group">
							<label>Tanggal Acara</label>
							<input type="text" class="form-control" value="{{date('D, d M Y', strtotime($reservation->date))}}" readonly>
						</div>
						<div class="form-group">
							<label>Status Reservasi Saat Ini</label>
							<input type="text" class="form-control" value="{{$reservation->status}}" readonly>
						</div>
						<div class="form-group">
							<label>Status Baru :</label>
							<select class="form-control select2" style="width: 100%;" name="status">
								<option value="cancel">cancel</option>
								<option value="menunggu verifikasi">menunggu verifikasi</option>
								<option value="menunggu hari H">menunggu hari H</option>
								<option value="selesai">selesai</option>
							</select>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary" style="float: right;">Perbarui</button>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Status Vendor</h3>
				</div>
				<!-- <div class="box-body"> -->
					<table class="table table-bordered table-striped">
						<thead>
							<th>Nama</th>
							<th>Status</th>
							<th>Bukti Transfer</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							@foreach($reservation->vendors()->withPivot('status', 'payment_proof')->get() as $vendor)
							<tr>
								<td>{{$vendor->name}}</td>
								<td>{{$vendor->pivot->status}}</td>
								<td>
									<img style="max-width: 150px;" src="/storage/{{$vendor->pivot->payment_proof}}">
								</td>
								<td style="width: 30px;">
									<label for="file-upload-{{$vendor->id}}" class="btn btn-success">
										Upload
									</label>
									<form method="POST" action="/admin/reservation/{{$reservation->id}}/upload/{{$vendor->id}}" enctype="multipart/form-data" style="display: none">
										{{csrf_field()}}
										<input class="upload-bukti" id="file-upload-{{$vendor->id}}" style="display: none" type="file" name="photo"/>
									</form>
									<!-- <a style="margin-top: 5px;" class="btn btn-danger" data-toggle="modal" data-target="#modal-warning-{{$vendor->id}}">Update</a> -->
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<!-- </div> -->
				</div>
			</div>
			<!-- /.box-body -->
		</div>
	</section>
	<!-- /.content -->
	@endsection
	@section('custom-js')
	<script>
		$("#file-upload").onchange = function() {
			$("#form-").submit();
		};
		$('.upload-bukti').each(function(){
			this.onchange = function(){
				$(this).parent('form').submit();
			};
		});
	</script>
	@endsection