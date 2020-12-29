@extends('layouts.app')
@section('content')
<div class="container">
<a href="{{ route('book.create') }}" class="btn btn-primary">Add Picture</a><br/><br/><hr/>
</div>
                    

                            @foreach($books as $book)
                           
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <figure>
              <img width="420" height="300" src="uploads/{{ $book->photo }}">
              <figcaption>
                  <h2>{{ $book->title }}</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
              </figcaption>
            </figure>
          </div>
                            
                            @endforeach
                        
                
@endsection