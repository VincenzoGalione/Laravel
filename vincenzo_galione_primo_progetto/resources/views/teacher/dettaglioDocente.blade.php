<x-layout>
    
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
    

</x-layout>