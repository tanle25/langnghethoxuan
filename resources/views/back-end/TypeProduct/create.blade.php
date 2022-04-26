@extends('back-end.layouts.main')

@section('title')
Tạo mới: Loại Sản Phẩm
@endsection

@section('css')
@endsection

{{-- Page content --}}
@section('content')
<div class="wrapper wrapper-content">
	<div class="row animated fadeInRight">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5>Thông tin chi tiết</h5>
			</div>
			<div class="ibox-content">
				@include('back-end.partials.alert-msg')
				<form id="form" class="form-horizontal" role="form" action="{{route('type-product.store')}}" 
				enctype="multipart/form-data" method="POST">
				@csrf
					@include('back-end.TypeProduct.form')
					<div class="form-group">
						<div class="col-sm-4 col-sm-offset-2">
							<button class="btn btn-white" >Làm mới</button>
							<button class="btn btn-primary" type="submit">Tạo mới</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@section('js')
<script src="{{asset('js/slug.js')}}"></script>
<script>
	$(document).ready(function() {
		settingIframe("#iframe-btn-0", "#thumb_0", "#preview_0");
	});
</script>
@endsection