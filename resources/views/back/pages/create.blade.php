@extends('back.layouts.master')

@section('title','Sayfa Oluştur')
	

@section('content')
    
<div class="card shadow mb-4">
	<div class="card-body">

		@if ($errors->any())
			<div class="alert alert-danger">
				@foreach ($errors->all() as $error)
					<li>{{ $error}}</li>
				@endforeach
			</div>
		@endif

		<form action="{{route('pages.store')}}" method="POST" enctype="multipart/form-data">
			@csrf

				<div class="form-group">
				  <label for="title">Sayfa Başlığı</label>
				  <input type="text" name="title" id="title" class="form-control col-md-3" required>
				</div>
						
				
				<div class="form-group">
					<label for="image">Fotoğraf</label>
					<input type="file" name="image" class="form-control col-md-3" value="{{old('image')}}" required>
				  </div>
			
				 
				  <div class="form-group" id="içerik">
					  <label for="içerik">İçerik</label>
					  <textarea class="form-control" id="summernote" name="content" rows="5">{{old('content')}}</textarea>
					</div>	
				 
				  <div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Gönder</button>
				</div>

		</form>

		</div>
	</div>

</div>


@endsection

		@section('js')		
		{{--cke	--}}
		<script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
		{{--<script>
			ClassicEditor
				.create( document.querySelector( '#editor' ) )
				.catch( error => {
					console.error( error );
				} );
		</script>--}}

		{{--end cke--}}

		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
		<script>
		$(document).ready(function() {
			$('#summernote').summernote({
				'height' :300
			});
		
		  });
		  
		  </script>
		@endsection		  
		@section('css')			
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
		@endsection		  



