@extends("../layout/master")

@section("title")
	{{ $article->title }}
@endsection

@section("main_content")
	{{ $article->content}}

	@foreach($comments as $comment)
		<p>{{ $comment->content }}</p>
	@endforeach

	<form class='form-horizontal' method="POST" action='{{ url("/create_comment/$article->id") }}'>
	{{ csrf_field() }}
 
		<div class='form-group'>
			<label class="control-label col-sm-2" for="comment">
				Comment:
			</label>

			<div class="col-sm-10">
				<textarea name="comment" id="comment">

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