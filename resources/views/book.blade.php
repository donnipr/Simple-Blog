@extends('layouts.app')
@section('content')

<div class="continer">
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
			<div class="form-group">
				{{ Form::open(['route' => 'book.store','enctype' => 'multipart/form-data','files' => 'true']) }}
				<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
				<div class="form-group {{ $errors->has('title') ? 'has-error' : ''  }}">
					{{ Form::label('title','title') }}
					{{ Form::text('title','',['placeholder' => 'write title here......','class' => 'form-control']) }}
					{{ $errors->first('', '<p class="help-block"></p>') }}
				</div>
				<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''  }}">
					{{ Form::label('photo','Image(png,jpg,jpeg)') }}
					{{ Form::file('photo','',['placeholder' => 'Masukkan deskripsi buku','class' => 'form-control']) }}
					{{ $errors->first('', '<p class="help-block"></p>') }}
				</div>
					{{ Form::submit('Save',['class' => 'btn btn-primary']) }}
					{{ Form::reset('reset',['class' => 'btn btn-danger']) }}
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@endsection
