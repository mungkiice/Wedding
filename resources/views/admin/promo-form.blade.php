@extends('admin.app')
@section('page', 'Promo')
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
				<form method="POST" action="/admin/promo" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputFile">Gambar Promo</label>
							<input type="file" id="exampleInputFile" name="image">
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