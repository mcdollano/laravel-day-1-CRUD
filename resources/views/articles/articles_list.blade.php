@extends("../layout/master")


@section("main_content")
	<a href='{{url("/create")}}'>
		<button class="btn btn-default">Create New</button>
	</a>

	<ul>
		@foreach($articles as $article)
			<a href='{{ url("/home/$article->id")}}'>
				<li>
					{{ $article->title }} {{ $article->content}}
				</li>
			</a>	
			<div>
				<a href='{{url("/edit/$article->id") }}'>
					<button class='btn btn-default'>	Edit
					</button>
				</a>

				<a href='{{ url("/home/delete/$article->id")}}'><button class='btn btn-danger'>Delete</button>
				</a>
			</div>
		@endforeach
	</ul>
@endsection

@section("title")
	Articles List
@endsection
