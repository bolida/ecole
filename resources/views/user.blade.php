
    <p><a href="{{ route('post.list') }}">Retour</a></p>
  
    <h1>Mon compte</h1>
    <span>Nom: {{ $user->name }}</span>
    <br>
    <span>Email: {{ $user->email }}</span>

    <br>
    <h2>Mes articles</h2>
    @if ( $user->posts->count() > 0)
        @foreach ($user->posts as $post)
            <div>
                
                <span><a href="{{ route('post.show', ['id' => $post->id]) }}"><strong>{{ $post->name }}</strong></a></span>
                <br>
                <span>{{ $post->created_at->format('d/m/Y')}}</span>
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
