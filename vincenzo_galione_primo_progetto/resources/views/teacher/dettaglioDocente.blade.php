<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary title">
     <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('chi.siamo')}}">Chi siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('teachers')}}">Docenti</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    

    <div class="container-fluid text-light bg-dark ">
        <div class="row  justify-content-center align-items-center">
            <div class="col-12 py-5">
                <h1 class="text-center diplay-4 ">
                    Dettagli Docente: {{$teacher['name']}} {{$teacher['surname']}}
                </h1>
            </div>
        </div>
        <div class="row vh-100 justify-content-center align-items-center  ">
         <div class="col-12 col-md-6">
            <img src="https://picsum.photos/400" alt="immagine casuale">
         </div>
         <div class="col-12 col-md-6">
            <h2>Materie insegnate:</h2>
            <p>{{$teacher['subject']}}</p>
         </div>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>