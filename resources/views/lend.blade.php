@extends('partials/main')
@section('title','租借杯子')
@section('content')
<div class="container disable-select">

	<form role="form" id="lendform">
		{{ csrf_field() }}
        <div class="form-group col-md-4 col-md-offset-4 tel">
          <label for="tel" class="gtg-title">使用者手機號碼</label>
          <input type="tel" id="tel" class="form-control gtg-input" placeholder="手機號碼 (ex.0978123123)" maxlength="10" minlength="10" required>
        </div>
        <div class="form-group col-md-4 col-md-offset-4 num container-hidden">
          <label for="num" class="gtg-title">杯子編號 (ex.001)</label>
          <input type="tel" class="form-control gtg-input" id="num" placeholder="杯子編號" maxlength="3" minlength="1" required>
        </div>
        <div class="col-md-4 col-md-offset-4">
         <button type="submit" class="gtg-button button-small container-hidden" id="lendsend-step2">記錄</button>
        <button type="submit" class="gtg-button button-small" id="lendsend">查詢</button>
        </div>
      </form>
</div>
@section('js')

@stop

@stop