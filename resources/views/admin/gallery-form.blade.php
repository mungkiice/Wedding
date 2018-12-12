@extends('admin.app')
@section('page', 'Galeri')
@section('section', 'Form Buat')
@section('content')

<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-6">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Form Buat</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form method="POST" action="/admin/gallery" enctype="multipart/form-data">
					{{csrf_field()}}
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
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="ex. Yani & Yanto" name="celeb">
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Foto Galeri</label>
							<input type="file" id="exampleInputFile" name="photo">
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary" style="float: right;">Buat</button>
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