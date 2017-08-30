@extends('partials/backstage')
@section('title', '更新商家資訊')
@section('content')
<div class="container">
	<form role="form">
		<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

        <div class="form-group col-md-4 col-md-offset-4">
	    	<label for="vendor-id" class="gtg-title">選擇欲修改的店家</label>
	    	<select class="form-control" id="vendor-id" required>
	    		@forelse($vendor as $v)
				  	<option value="{{ $v->id }}">{{ $v->name }}</option>
				@empty
					<option>沒有商家資料</option>
				@endforelse
			</select>
			<br>
          <label for="vendor-480" class="gtg-title">480 杯杯數量</label>
          <input type="text" class="form-control gtg-input" id="vendor-480" placeholder="輸入杯杯數目" maxlength="5" minlength="1" required> <br>
          <label for="vendor-360" class="gtg-title">360 杯杯數量</label>
        	<input type="text" class="form-control gtg-input" id="vendor-360" placeholder="輸入杯杯數目" maxlength="5" minlength="1" required>
        </div>
        <div class="col-md-4 col-md-offset-4">
        <button type="submit" class="gtg-button button-small" id="updatevendor">修改</button>
        </div>
      </form>
	      <div class="col-md-4 col-md-offset-4 text-center">
        	<p>{{ Carbon\Carbon::now() }}</p>
        </div>
</div>
@stop