@extends('admin.app')
@section('page', 'Vendor')
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
				<form method="POST" action="/admin/vendor" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="box-body">
						<div class="form-group">
							<label>Kategori Vendor</label>
							<select class="form-control select2" style="width: 100%;" name="category_id">
								@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Nama</label>
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="ex. Yani Catering" name="name">
						</div>
						<div class="form-group">
							<label>Deskripsi</label>
							<textarea class="form-control" rows="3" name="description" placeholder="ex. Kami menyediakan makanan terbaik..."></textarea>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Harga</label>
							<input type="number" class="form-control" id="exampleInputPassword1" placeholder="dalam satuan rupiah" name="price">
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Foto Vendor</label>
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