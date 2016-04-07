@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>{{ $news->title }}</strong></div>
                    <div class="panel-body">
                        <p>{{ $news->body }}</p>

                        <div>
                            <strong>Categories</strong>:
                            @foreach($news->category as $category)
                                <a href="">{{ $category->title }}</a>
                            @endforeach
                        </div>


                        <p><strong>Author</strong>: {{ $news->author->name }}, {{ $news->author->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
