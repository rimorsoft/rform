<div class="form-group">	
    {{ Form::label($name, $label, ['class' => 'control-label']) }}
	
	@foreach($items as $key => $value)

		{{ Form::radio($name, $key) }}
		{{ Form::label($name, $value, ['class' => 'control-label']) }}

	@endforeach
</div>