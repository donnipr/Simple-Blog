@extends('layouts.app')
@section('content')

<head>
	<title></title>
<script type="text/javascript" src="{{ asset('src\assets\js\tinymce\tinymce.min.js') }}"></script>

<script type="text/javascript">
	tinymce.init({
		selector : "textarea",
		invalid_elements : "span"
	});
</script>

</head>
<body>
<div class="continer">
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            
                <div class="panel-body">
    <h2><strong>{{ $articles->title }}</strong></h2><br/>
    <p>{!! $articles->body !!}</p>
    <hr/>
    <p>{{ $articles->created_at->diffForHumans() }}</p><br/>
</div>
 </div>
</div>
</div>
</div>
</body>
@endsection