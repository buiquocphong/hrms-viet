@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/job_titles') }}">Job Title</a> :
@endsection
@section("contentheader_description", $job_title->$view_col)
@section("section", "Job Titles")
@section("section_url", url(config('laraadmin.adminRoute') . '/job_titles'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Job Titles Edit : ".$job_title->$view_col)

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
				{!! Form::model($job_title, ['route' => [config('laraadmin.adminRoute') . '.job_titles.update', $job_title->id ], 'method'=>'PUT', 'id' => 'job_title-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'ma_chuc_vu')
					@la_input($module, 'chuc_vu_vi')
					@la_input($module, 'chuc_vu_en')
					@la_input($module, 'tinh_tang_ca')
					@la_input($module, 'cham_gio_cong')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/job_titles') }}">Cancel</a></button>
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
	$("#job_title-edit-form").validate({
		
	});
});
</script>
@endpush
