@extends('partials/app')
@section('title','回收杯杯')
@section('content')
<div class="container">
	<form role="form">
        <div class="form-group col-md-4 col-md-offset-4">
          <label for="num" class="gtg-title">杯子編號</label>
          <input type="tel" class="form-control gtg-input" id="num" placeholder="杯子編號 (ex.0001)" maxlength="4" minlength="4" required>
        </div>
        <div class="col-md-4 col-md-offset-4">
        <button type="submit" class="gtg-button button-small" id="recoversend">確定</button>
        </div>
      </form>
</div>
@stop