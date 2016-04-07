@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">News</div>
                    <div class="panel-body">
                        <ul>
                            @foreach($news as $each)
                            <li><a href="{{ route('news.show', $each->id) }}">{{ $each->title }}</a></li>
                            @endforeach

                            {{ $news->links() }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
