<div class="card mx-auto" style="width: 18rem;">
    <img src="https://picsum.photos/100" class="card-img-top" alt="immagini random">
    <div class="card-body">
        <h5 class="card-title">{{ $name }}</h5>
        <a href="{{ route('servizio.detail', ['id' => $id]) }}"
            class="btn btn-primary">Vai al dettaglio</a>
    </div>
</div>