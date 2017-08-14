@extends('partials/app')
@section('title','杯杯狀態')
@section('content')
<div class="container disable-select">
    <div class="row">
        <div class="col-xs-6 status-colum text-center">
            <div class="container-status">
            	<p>480mL    杯</p>
            	<p>可用</p>
            	<h1>18</h1>
             	<p>個</p>
            </div>
        </div>
        <div class="col-xs-6 status-colum text-center">
            <div class="container-status">
            	<p>360mL    杯</p>
            	<p>可用</p>
            	<h1>18</h1>
             	<p>個</p>
            </div>
        </div>


        <div class="col-xs-12">
			<div class="container-lr lr-blue">
        		<p>今日累積借出</p>
        		<h1 class="text-right">20<span>個</span></h1>
        	</div>
        </div>

        <div class="col-xs-12">
			<div class="container-lr lr-palm">
        		<p>今日累計回收</p>
        		<h1 class="text-right">30<span>個</span></h1>
        	</div>
        </div>
         
        </div>
    </div>
</div>

@stop