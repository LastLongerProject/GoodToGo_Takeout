@extends('partials/main')
@section('title','好盒器店鋪系統')
@section('content')
<div class="container disable-select">
	<div class="row">
		
		<div class="col-md-4 col-md-offset-4">
			<a href="{{ Route('lend') }}" target="_self"><button class="gtg-button">出借</button></a>
			<a href="{{ Route('recover') }}"><button class="gtg-button">回收</button></a>
			<a href=""><button class="gtg-button">店鋪杯杯狀態</button></a>
		</div>
	</div>

</div>
@section('js')
<script>
	new Noty({
    type: 'info',
    layout: 'bottomCenter',
    text: '店鋪',
    theme: 'nest',
      animation: {
        open: 'animated fadeInUp', // Animate.css class names
        close: 'animated fadeOutDown' // Animate.css class names
    }
}).show();
</script>
@stop
@stop