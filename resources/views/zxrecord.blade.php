@extends('partials/backstage')
@section('title', '上傳正興杯杯紀錄')
@section('content')
<div class="container">
	<form role="form" action="importzx" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group col-md-4 col-md-offset-4">
          <label for="file" class="gtg-title">檔案上傳</label>
          <input type="file" class="form-control gtg-input" id="file" accept=".xlsx" name="file" required>
        </div>
        <div class="col-md-4 col-md-offset-4">
        <button type="submit" class="gtg-button button-small" id="file">上傳</button>
        </div>
      </form>
</div>
@stop