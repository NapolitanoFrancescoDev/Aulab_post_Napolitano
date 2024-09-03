<div class="card  card-hidden shadow" style="width: 19rem;">
    <div>
        <a href="{{ route('article.show', $article) }}"><img src="{{ Storage::url($article->image) }}" class="card-img-top"
            alt="Immagine dell'articolo: {{ $article->title }}" 
            style="width: 100%; height: 120px; object-fit: cover; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); border-radius: 0;"></a>
    </div>
    <div class="card-body" style="padding: 8px;">
        <h5 class="card-title" style="margin-bottom: 6px;">{{ $article->title }}</h5>
        <p class="card-subtitle" style="margin-bottom: 6px;">{{ $article->subtitle }}</p>
        <p class="small text-muted my-0" style="margin-bottom: 6px;">
            @foreach ($article->tags as $tag)
                #{{ $tag->name }}
            @endforeach
        </p>
        @if ($article->category)
            <p class="small-text-muted" style="margin-bottom: 6px;">Categoria:
                <a href="{{ route('article.byCategory', $article->category) }}"
                    class="text-capitalize text-muted">{{ $article->category->name }}</a>
            </p>
        @else
            <p class="small text-muted" style="margin-bottom: 6px;">Nessuna categoria</p>
        @endif

        <p class="card-subtitle text-muted fst-italic small" style="margin-bottom: 6px;">Tempo di lettura {{ $article->readDuration() }} min</p>
    </div>
    
    <div class="card-footer" style="padding: 8px;">
        <p style="margin-bottom: 6px;">Redatto il {{ $article->created_at->format('d/m/Y') }} <br> da <a
                href="{{ route('article.byAuthor', $article->user) }}"
                class="text-capitalize text-muted">{{ $article->user->name }}</a>
            </p>
                <a href="{{ route('article.show', $article) }}" class="custom-link-card">Ulteriori informazioni</a>
    </div>
</div>
