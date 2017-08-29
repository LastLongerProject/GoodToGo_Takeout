@extends('partials/backstage')
@section('title', '盒器後台')
@section('content')
	<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
			<a href="#"><button class="gtg-button button-small">下載 CSV 檔</button></a>
		</div>


			  <table class="table table-responsive table-striped text-center"  style="margin-top: 24px;">
				  <thead>
				    <tr>
				      <th>代號</th>
				      <th>杯子</th>
				      <th>商家</th>
				      <th>顧客</th>
				      <th>狀態</th>
				      <th>時間</th>
				    </tr>
				  </thead>


				<tbody>
		@foreach($container as $c)
   			 <tr>
     				 	<th scope="row">{{ $c->id }} </th>
     				 	<td> {{ $c->number }} </td>
      					<td> {{ substr($c->vendor_name, 0, 6) }} </td>
      					<td> {{ $c->customer_phone }} </td>
      					<td> @if($c->status == 0) 歸還 @else 借出 @endif</td>
      					<td> {{ Carbon\Carbon::parse($c->created_at)->format('m/d h:i') }} </td>
    			</tr>


    				@endforeach
  				</tbody>


			  </table>
			
				<div class="container text-center">
					{{ $container->links() }}
				</div>
	</div>
</div>
@stop