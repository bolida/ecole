
    <h1>Liste des articles</h1>
    @if ( $posts->count() > 0)
        @foreach ($posts as $post)
            <div>
                <strong><a href="{{ route('user.show', ['id' => $post->user->id]) }}">{{ $post->user->name }}</a></strong>
                <br>
                <span>{{ $post->categorie->name }} | {{ $post->created_at->format('d/m/Y')}}</span>
                <br>
                <span><a href="{{ route('post.show', ['id' => $post->id]) }}"><strong>{{ $post->name }}</strong></a></span>
                <br>
                @if ( $post->comments->count() > 0)
                    <span>{{ $post->comments->count() }} commentaires</span>
                @endif

                @forelse($post->comments as $comment)
                    <div>{{ $comment->content }} | crée le {{ $comment->created_at->format('d/m/Y')}}</div>
                @empty
                    <span></span>
                @endforelse 
            </div>
            <hr>
        @endforeach
    @else
        <span>Aucun post en bdd</span>
    @endif
