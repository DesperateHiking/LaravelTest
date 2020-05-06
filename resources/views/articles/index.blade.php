@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            @foreach($articles as $article)
                <div id="content">
                    <div class="title">
                        <h1><a href="/articles/{{$article->id}}">{{$article->title}}</a></h1>
                        <p><img src="/images/banner.jpg" alt="" class="image image-full"/></p>
                        {{$article->excerpt}}
                    </div>
                    @endforeach
                </div>
        </div>
@endsection

