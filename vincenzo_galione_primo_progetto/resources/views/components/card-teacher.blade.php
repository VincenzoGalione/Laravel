<div class="card mx-auto" style="width: 18rem;">
    <img src="https://picsum.photos/100" class="card-img-top" alt="immagini random">
    <div class="card-body">
      <h5 class="card-title">{{$name}} {{$surname}}</h5>
      <p class="card-text">{{$subject}}</p>
      <a href="{{route('teacher.detail', ['name'=>$name])}}" class="btn btn-primary">Vai al dettaglio</a>
    </div>
</div>