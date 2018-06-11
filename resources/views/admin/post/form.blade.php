@extends('layouts.main')
@section('title', 'Thêm bài viết')
@section('content')
	<div class="col-md-6 offset-md-3">
		<form method="post" enctype="multipart/form-data">
			@csrf
			<input type="hidden" name="id" value="{{$model->id}}">

			<div class="form-group">
				<label>Tiêu đề</label>
				<input type="text" name="title" class="form-control" placeholder="Nhập tiêu đề" value="{{$model->title}}">
			</div>

			<div class="form-group">
				<label>Đường dẫn</label>
				<input type="text" name="slug" class="form-control" placeholder="Nhập đường dẫn" value="{{$model->slug}}">
			</div>

			<div class="form-group">
				<label>Danh mục</label>
				<select name="cate_id" class="form-control">
					@foreach ($cates as $c)
						<option 
							@if ($c->id == $model->cate_id)
								selected
							@endif
							value="{{$c->id}}">{{$c->name}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label>Ảnh</label>
				<input type="file" name="image" class="form-control" >
			</div>

			<div class="form-group">
				<label>Mô tả ngắn</label>
				<textarea name="short_desc" class="form-control">{{$model->short_desc}}</textarea>
			</div>

			<div class="form-group">
				<label>Nội dung</label>
				<textarea name="content" class="form-control">{{$model->content}}</textarea>
			</div>

			<div class="form-group">
				<label>Tác giả</label>
				<input type="text" name="author" class="form-control" placeholder="Nhập tác giả" value="{{$model->author}}">
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-sm btn-primary">Lưu</button>
				<a href="{{ route('homepage') }}" class="btn btn-sm btn-danger">Huỷ</a>
			</div>
		</form>
	</div>
@endsection