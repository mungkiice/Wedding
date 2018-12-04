@extends('admin.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Form Vendor
		<small>create</small>
	</h1>
<!--       <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol> -->
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-6">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Vendor</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form method="POST" action="/admin/vendor/{{$vendor->id}}" enctype="multipart/form-data">
					{{csrf_field()}}
					{{method_field('PUT')}}
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
							<input type="text" class="form-control" id="exampleInputPassword1" name="name" value="{{$vendor->name}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Harga</label>
							<input type="number" class="form-control" id="exampleInputPassword1" name="price" value="{{$vendor->price}}">
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Foto Vendor</label>
							<input type="file" id="exampleInputFile" name="photo">
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