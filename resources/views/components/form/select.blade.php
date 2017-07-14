<div class="form-group">
    {{ Form::label($name, $label, ['class' => 'control-label']) }}
    {{ Form::select($name, $items, ['class' => 'form-control']) }}
</div>