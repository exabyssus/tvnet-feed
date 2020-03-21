@extends('feed::layouts.layout')

@section('content')
    @if(!empty($posts))
        <ul class="postsList">
            @foreach($posts as $post)
                <li>
                    <a href="{{ $post['url'] }}" target="_blank">
                        <h3>{{ $post['title'] }}</h3>
                        <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}">
                        <p>{{ $post['description'] }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection