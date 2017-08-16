@extends('partials/app')
@section('title','好盒器店鋪系統')
@section('content')

<div class="container disable-select">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
			<a href="{{ Route('lend',['slug' => $vendor->slug]) }}"><button class="gtg-button">租借杯杯</button></a>
			<a href="{{ Route('recover',['slug' => $vendor->slug ]) }}"><button class="gtg-button">回收杯杯</button></a>
			<a href="{{ Route('status',['slug' => $vendor->slug ]) }}"><button class="gtg-button">杯杯狀態</button></a>
		</div>
	</div>
</div>
@section('js')
<script>
	new Noty({
    type: 'info',
    layout: 'bottomCenter',
    text: '{{ $vendor->name }}',
    closeWith: false,
    theme: 'nest',
      animation: {
        open: 'animated fadeInUp', // Animate.css class names
        close: 'animated fadeOutDown' // Animate.css class names
    }
}).show();
</script>
@stop
@stop