@extends('admin.app')
@section('page', 'Vendor')
@section('section', 'Edit Form')
@section('content')

<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-6">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Form</h3>
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
							<label>Tanggal</label>
							<input type="text" class="form-control" value="{{date('D, d M Y', strtotime($reservation->date))}}" readonly>
						</div>
						<div class="form-group">
							<label>Status Reservasi Saat Ini</label>
							<input type="text" class="form-control" value="{{$reservation->status}}" readonly>
						</div>
						<div class="form-group">
							<label>Status Baru :</label>
							<select class="form-control select2" style="width: 100%;" name="status">
								<option value="canceled">canceled</option>
								<option value="planning">planning</option>
								<option value="waiting for verification">waiting for verification</option>
								<option value="waiting for the Day">waiting for the Day</option>
								<option value="done"></option>
							</select>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
			<!-- /.box -->

		</form>
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!--/.col (right) -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
@endsection