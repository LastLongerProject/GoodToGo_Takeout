@extends('partials/backstage')
@section('title', '盒器後台')
@section('content')
	<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
			<a href="{{ Route('record') }}"><button class="gtg-button button-small">顯示所有容器紀錄</button></a>
			<a href="{{ Route('export') }}"><button class="gtg-button button-small">下載 CSV 檔</button></a>
			<a href="{{ Route('bstatus') }}"><button class="gtg-button button-small">統計資料</button></a>
			<a href="{{ Route('bstatus') }}"><button class="gtg-button button-small">上傳容器列表</button></a>
			<a href="{{ Route('bstatus') }}"><button class="gtg-button button-small">更新店家配送狀態</button></a>
		</div>

</div>
@stop