@extends('layouts.crud._form')

@push('form-fields')
<div class="form-group">
	<div class="row">
		<div class="col-sm-6">
			{{ Form::label('name', 'Name', ['class'=>'control-label']) }}
    		{{ Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'required: Name']) }}
		</div>
		<div class="col-sm-6">
			{{ Form::label('address', 'Address', ['class'=>'control-label']) }}
    		{{ Form::text('address',null, ['class' => 'form-control', 'placeholder' => 'required: Address']) }}
		</div>
	</div>
</div>

<div class="form-group">
	<div class="row">
		<div class="col-sm-6">
			{{ Form::label('email', 'Email', ['class'=>'control-label']) }}
    		{{ Form::text('email',null, ['class' => 'form-control', 'placeholder' => 'required: Email']) }}
		</div>
		<div class="col-sm-6">
			{{ Form::label('phone', 'Phone', ['class'=>'control-label']) }}
    		{{ Form::text('phone',null, ['class' => 'form-control', 'placeholder' => 'required: Phone']) }}
		</div>
	</div>
</div>

<div class="form-group">
	{{ Form::label('introduce', 'Introduce', ['class'=>'control-label']) }}
    {{ Form::textarea('introduce',null, ['class' => 'form-control','rows'=>'3', 'placeholder'=>'Intro']) }}
</div>

<div class="form-group">
	<div class="checkbox">
        <label>
            {{ Form::checkbox('locked', true, old('locked'), ['data-toggle'=>'toggle','data-size' => 'small']) }}	<b>Locked  </b>
        </label>
    </div>
</div>

@endpush

@push('form-partials')
@include('backend._partials.form.image', ['imageName' => 'image'])
@endpush
