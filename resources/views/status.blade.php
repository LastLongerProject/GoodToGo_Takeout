@extends('partials/app')
@section('title','杯杯狀態')
@section('content')
<div class="container disable-select">
    <div class="row">
        <div class="col-xs-6 status-colum text-center">
            <div class="container-status">
            	<p><svg width="14px" height="24px" viewBox="0 0 14 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="w/out-QR-Code" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="status" transform="translate(-46.000000, -115.000000)" fill="#4A4A4A">
            <g id="Page-1" transform="translate(41.000000, 115.000000)">
                <path d="M18,2.5 C18,3.325 17.325,4 16.5,4 L7.5,4 C6.675,4 6,3.325 6,2.5 L6,1.5 C6,0.675 6.675,0 7.5,0 L16.5,0 C17.325,0 18,0.675 18,1.5 L18,2.5 Z" id="Fill-1"></path>
                <path d="M17,3 L7,3 L7,4.186 C5.84,4.601 5,5.701 5,7 L5,21 C5,22.65 6.35,24 8,24 L16,24 C17.65,24 19,22.65 19,21 L19,7 C19,5.701 18.16,4.601 17,4.186 L17,3 Z M16,4 L16,4.186 C16,4.607 16.266,4.984 16.663,5.127 C17.463,5.413 18,6.166 18,7 L18,21 C18,22.103 17.103,23 16,23 L8,23 C6.897,23 6,22.103 6,21 L6,7 C6,6.166 6.537,5.413 7.337,5.127 C7.734,4.984 8,4.607 8,4.186 L8,4 L16,4 L16,4 Z" id="Fill-3"></path>
                <path d="M16.5,8.5 C16.224,8.5 16,8.276 16,8 L16,7.5 C16,7.224 16.224,7 16.5,7 C16.776,7 17,7.224 17,7.5 L17,8 C17,8.276 16.776,8.5 16.5,8.5" id="Fill-5"></path>
                <path d="M16.5,16 C16.224,16 16,15.776 16,15.5 L16,9.5 C16,9.224 16.224,9 16.5,9 C16.776,9 17,9.224 17,9.5 L17,15.5 C17,15.776 16.776,16 16.5,16" id="Fill-7"></path>
            </g>
        </g>
    </g>
</svg> 480mL    杯</p>
            	<p>可用</p>
            	<h1>{{ $possess_480 }}</h1>
             	<p>個</p>
            </div>
        </div>
        <div class="col-xs-6 status-colum text-center">
            <div class="container-status">
            	<p><svg width="14px" height="24px" viewBox="0 0 14 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="w/out-QR-Code" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="status" transform="translate(-46.000000, -115.000000)" fill="#4A4A4A">
            <g id="Page-1" transform="translate(41.000000, 115.000000)">
                <path d="M18,2.5 C18,3.325 17.325,4 16.5,4 L7.5,4 C6.675,4 6,3.325 6,2.5 L6,1.5 C6,0.675 6.675,0 7.5,0 L16.5,0 C17.325,0 18,0.675 18,1.5 L18,2.5 Z" id="Fill-1"></path>
                <path d="M17,3 L7,3 L7,4.186 C5.84,4.601 5,5.701 5,7 L5,21 C5,22.65 6.35,24 8,24 L16,24 C17.65,24 19,22.65 19,21 L19,7 C19,5.701 18.16,4.601 17,4.186 L17,3 Z M16,4 L16,4.186 C16,4.607 16.266,4.984 16.663,5.127 C17.463,5.413 18,6.166 18,7 L18,21 C18,22.103 17.103,23 16,23 L8,23 C6.897,23 6,22.103 6,21 L6,7 C6,6.166 6.537,5.413 7.337,5.127 C7.734,4.984 8,4.607 8,4.186 L8,4 L16,4 L16,4 Z" id="Fill-3"></path>
                <path d="M16.5,8.5 C16.224,8.5 16,8.276 16,8 L16,7.5 C16,7.224 16.224,7 16.5,7 C16.776,7 17,7.224 17,7.5 L17,8 C17,8.276 16.776,8.5 16.5,8.5" id="Fill-5"></path>
                <path d="M16.5,16 C16.224,16 16,15.776 16,15.5 L16,9.5 C16,9.224 16.224,9 16.5,9 C16.776,9 17,9.224 17,9.5 L17,15.5 C17,15.776 16.776,16 16.5,16" id="Fill-7"></path>
            </g>
        </g>
    </g>
</svg>  360mL    杯</p>
            	<p>可用</p>
            	<h1>{{ $possess_360 }}</h1>
             	<p>個</p>
            </div>
        </div>
        <div class="col-xs-12">
			<div class="container-lr lr-blue">
        		<p>今日累積借出</p>
        		<h1 class="text-right">{{ $lend }}<span>個</span></h1>
        	</div>
        </div>

        <div class="col-xs-12">
			<div class="container-lr lr-palm">
        		<p>今日累計回收</p>
        		<h1 class="text-right">{{ $recover }}<span>個</span></h1>
        	</div>
        </div>
         
        </div>
    </div>
</div>

@stop