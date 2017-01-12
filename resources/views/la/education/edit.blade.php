@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/education') }}">Education</a> :
@endsection
@section("contentheader_description", $education->$view_col)
@section("section", "Education")
@section("section_url", url(config('laraadmin.adminRoute') . '/education'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Education Edit : ".$education->$view_col)

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
				{!! Form::model($education, ['route' => [config('laraadmin.adminRoute') . '.education.update', $education->id ], 'method'=>'PUT', 'id' => 'education-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'hoc_van')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/education') }}">Cancel</a></button>
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
	$("#education-edit-form").validate({
		
	});
});
</script>
@endpush
