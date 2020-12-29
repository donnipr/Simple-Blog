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
<div class="container"><a class="btn btn-success" href="{{ route('article.create') }}">Add post
<span class="glyphicon glyphicon-chevron-plus">
    	
    </span></a></div>
<hr/>
<div class="container">
@foreach($articles as $article)
<div class="row">
    <h2><strong>{{ $article->title }}</strong></h2>
    </div>
    <p> {!! substr($article->body,0,555) !!}</p>
    <a class="btn btn-primary"  href="{{ route('article.show', $article->id) }}">read more
    <span class="glyphicon glyphicon-chevron-right">
    	
    </span>
    </a>
    <p>{{ $article->created_at->diffForHumans() }}</p>
    
    <hr/>
 @endforeach
 {{ $articles->links() }}
 </div>

</body>
@endsection
