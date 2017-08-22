@extends('partials/app')
@section('title','租借杯杯')
@section('content')
<div class="container">

	<form role="form" id="lendform">
		{{ csrf_field() }}
        <div class="form-group col-md-4 col-md-offset-4 tel">
          <label for="tel" class="gtg-title">使用者手機號碼</label>
          <input type="tel" id="tel" class="form-control gtg-input" placeholder="手機號碼 (例: 0978123123)" maxlength="10" minlength="10" required>
        </div>
        <div class="form-group col-md-4 col-md-offset-4 num container-hidden">
          <label for="num" class="gtg-title">杯子編號</label>
          <input type="tel" class="form-control gtg-input" id="num" placeholder="杯子編號 (例: 0001)" maxlength="4" minlength="4" required>
        </div>
        <div class="col-md-4 col-md-offset-4">
        <button type="submit" class="gtg-button button-small" id="lendsend">確定</button>
        <button type="submit" class="gtg-button button-small container-hidden" id="lendsend-step2">出借</button>
        </div>
      </form>
</div>
@stop