@extends('layout.app')

@section('title', $post->title)

@section('content')
    <div class="p-3 py-4 row">
        <div class="col px-4">
            <h3>This is show.index of Post id = {{ $post->id }}
                {{ $post->title }}
            </h3>
            <ul style="list-style: none">
                
                <li>{{ $post->content }}</li>
                <li>Added {{ $post->created_at->diffForHumans() }}</li>

                @if (now()->diffInDays($post->created_at) < 1)
                    @component('components.badge')
                        New!
                    @endcomponent
                @endif
            </ul>
            <p>currently Read by {{ $counter }} user</p>
            <div class="h5">
                @tags(['tags' => $post->tags])
                @endtags
            </div>
            <h4>Comments
            </h4>
            @forelse ($post->comments as $item)
                <p>{{ $item->content }}, added at {{ $item->created_at->diffForHumans() }}</p>
            @empty
                <p class="p-2 shadow-3 shadow text-blue-400">no comments yet !!!</p>
            @endforelse
        </div>

        <div class="col-4">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Most Commented</h5>
                    <p class="card-text text-primary">What people are currently talking
                        about
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($MostCommented as $post)
                        <li class="list-group-item" id="mostCommented">
                            <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                                {{ $post->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Most Active</h5>
                    <p class="card-text text-primary">Users with Most
                        posts written
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($MostActive as $post)
                        <li class="list-group-item" id="mostCommented">
                            {{ $post->name }}
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
@endsection
