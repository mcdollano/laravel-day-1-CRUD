@extends("../layout/master")

@section('title')
	EDIT {{ $article->title }}
@endsection

@section('main_content')
	<form class='form-horizontal' method="POST" action='{{ url("/edit/$article->id") }}'>
	{{ csrf_field() }}
		<div class='form-group'>
			<label class="control-label col-sm-2" for="title">
				Title:
			</label>

			<div class="col-sm-8">
				<input type="text" name="title" class="form-control" id="title" name="title" placeholder="Blog Title" value="{{ $article->title }}">
			</div>
		</div>
 
		<div class='form-group'>
			<label class="control-label col-sm-2" for="content">
				Content:
			</label>

			<div class="col-sm-10">
				<textarea name="content" id="content">
					{{ $article->content}}
				</textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10"> 
				<button type="submit" class="btn btn-default">
					Submit
				</button>
			</div>
		</div>

	</form>
@endsection