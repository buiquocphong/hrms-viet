@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/contracts') }}">Contract</a> :
@endsection
@section("contentheader_description", $contract->$view_col)
@section("section", "Contracts")
@section("section_url", url(config('laraadmin.adminRoute') . '/contracts'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Contracts Edit : ".$contract->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($contract, ['route' => [config('laraadmin.adminRoute') . '.contracts.update', $contract->id ], 'method'=>'PUT', 'id' => 'contract-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'hop_dong')
					@la_input($module, 'file_hop_dong')
					@la_input($module, 'gioi_han')
					@la_input($module, 'thoi_han')
					@la_input($module, 'dong_bhxh')
					@la_input($module, 'thoi_gian_bao_truoc')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/contracts') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#contract-edit-form").validate({
		
	});
});
</script>
@endpush
