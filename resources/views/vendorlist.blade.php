@extends('partials/app_admin')
@section('title','店鋪清單')
@section('content')

<div class="container disable-select">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
            @foreach($lists as $list)
			<a href="{{ Route('main',['slug' => $list->slug ]) }}"><button class="gtg-button button-small">{{ $list->name }}</button></a>
            @endforeach
		</div>
	</div>
</div>
@stop