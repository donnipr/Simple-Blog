@extends('layouts.app')
@section('content')

<head>
	<title></title>
<script type="text/javascript" src="{{ asset('src\assets\js\tinymce\tinymce.min.js') }}"></script>

<script type="text/javascript">
	tinymce.init({
		selector : "textarea",

	});
</script>

</head>
<body>


<div class="continer">
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create new content</div>
                <div class="panel-body">
			<div class="form-group">
				{{ Form::open(['route' => 'article.store']) }}
				<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
				<div class="form-group {{ $errors->has('title') ? 'has-error' : ''  }}">
					{{ Form::label('title','title') }}
					{{ Form::text('title','',['placeholder' => 'write title here......','class' => 'form-control']) }}
					{{ $errors->first('', '<p class="help-block"></p>') }}
				</div>
				<div class="form-group {{ $errors->has('body') ? 'has-error' : ''  }}">
					{{ Form::label('body','content') }}
					{{ Form::textarea('body','',['placeholder' => 'Masukkan deskripsi buku','class' => 'form-control']) }}
					{{ $errors->first('', '<p class="help-block"></p>') }}
				</div>
					{{ Form::submit('submit',['class' => 'btn btn-primary']) }}
					{{ Form::reset('reset',['class' => 'btn btn-danger']) }}
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>

</body>
@endsection