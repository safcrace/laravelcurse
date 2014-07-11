@extends ('layout')

@section ('content')

<div class='container'>
	<h1>{{ $candidate->user->full_name }}</h1>
	<p>
			Categoría:
			<a href="{{ route('category', [$candidate->category->slug, $candidate->category->id]) }}">{{ $candidate->category->name }}</a>
	</p>

	<p>Tipo de Trabajo: {{ $candidate->job_type_title }}</p>

	<p> Website: <a href="{{ $candidate->website_url }}">{{ $candidate->website_url }}</a></p>

	<h4>Description</h4>

	<p>{{ $candidate->description }}</p>

</div>

@endsection
