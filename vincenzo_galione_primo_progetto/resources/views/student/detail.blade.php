<x-layout>

    <div class="container-fluid vh-100 text-light bg-dark ">
        <div class="row  justify-content-center align-items-center">
            <div class="col-12 py-5">
                <h1 class="text-center diplay-4 ">
                    Dettagli dello Studente: {{$student['name']}} {{$student['surname']}}
                </h1>
            </div>
        </div>
        <div class="row  justify-content-center align-items-center  ">
         <div class="col-12 col-md-6">
            <img src="https://picsum.photos/400" alt="immagine casuale">
         </div>
         <div class="col-12 col-md-6">
            <h2>{{$student['name']}} {{$student['surname']}}</h2>
            
         </div>
        </div>
    </div>
    
</x-layout>