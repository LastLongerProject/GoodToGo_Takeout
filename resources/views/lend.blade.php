@extends('partials/main')
@section('title','查詢使用者')
@section('content')
<div class="container disable-select">
{{-- 	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h4 class="gtg-title">使用者手機號碼</h4>
		</div>
		<div class="col-md-6 col-md-offset-3">
			<input type="tel" class="gtg-input" placeholder="手機號碼" maxlength="10" minlength="10">
		</div>
		<div class="col-md-6 col-md-offset-3">
			<input type="tel" class="gtg-input" placeholder="手機號碼" maxlength="10" minlength="10">
		</div>
		<div class="col-md-6 col-md-offset-3">
			<button class="gtg-button button-small">確定</button>
		</div>

	</div> --}}

	<form role="form">
        <div class="form-group col-md-4 col-md-offset-4">
          <label for="tel" class="gtg-title">使用者手機號碼</label>
          <input type="tel" class="form-control gtg-input" id="tel" placeholder="手機號碼" maxlength="10" minlength="10" required>
        </div>
        <div class="form-group col-md-4 col-md-offset-4 ">
          <label for="num" class="gtg-title">杯子編號</label>
          <input type="tel" class="form-control gtg-input" id="num" placeholder="杯子編號" maxlength="20" minlength="1" required>
        </div>
        <div class="col-md-4 col-md-offset-4">
        <button type="submit" class="gtg-button button-small">確定</button>
        </div>
      </form>
</div>
@stop