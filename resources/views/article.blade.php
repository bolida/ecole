
    <p><a href="{{ route('post.list') }}">Retour</a></p>
    <strong><a href="{{ route('user.show', ['id' => $post->user->id]) }}">{{ $post->user->name }}</a></strong>
    <br>
    <strong>{{ $post->categorie->name }} | {{ $post->created_at->format('d/m/Y') }}</strong>
    <br>
    <h1>{{ $post->name }}</h1>
    @forelse($post->comments as $comment)
        <div>{{ $comment->content }} | crée le {{ $comment->created_at->format('d/m/Y')}}</div>
    @empty
        <span>Aucun commentaire pour ce post</span>
    @endforelse 
