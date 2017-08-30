@extends('partials/backstage')
@section('title', '盒器後台')
@section('content')
<div class="container">
    <div class="row">

        <div class="col-xs-12">
			<div class="container-lr lr-blue">
        		<p>共有幾個店家</p>
        		<h1 class="text-right">{{ $vendor }}<span>個</span></h1>
        	</div>
        </div>

        <div class="col-xs-12">
			<div class="container-lr lr-palm">
        		<p>全部累計借出</p>
        		<h1 class="text-right">{{ $container_lend }}<span>個</span></h1>
        	</div>
        </div>
    
        <div class="col-xs-12">
            <div class="container-lr lr-blue">
                <p>全部累積回收</p>
                <h1 class="text-right">{{ $container_recover }}<span>個</span></h1>
            </div>
        </div>
        
        <div class="col-xs-12">
            <div class="container-lr lr-palm">
                <p>全部會員總數</p>
                <h1 class="text-right">{{ $customer }}<span>個</span></h1>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="container-lr lr-blue">
                <p>全部杯杯總數</p>
                <h1 class="text-right">{{ $container_type }}<span>個</span></h1>
            </div>
        </div>

        </div>
    </div>
</div>

@stop