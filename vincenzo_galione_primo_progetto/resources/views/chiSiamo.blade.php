<x-layout>

    <div class="container-fluid  bg-background">
        <div class="row h-75 justify-content-center align-items-center ">
            <div class="col-12 py-5">
                <h1 class="text-center diplay-4 title">
                    I nostri studenti
                </h1>
            </div>
        </div>
        <div class="row  justify-content-center align-items-center  title ">
            @foreach ($students as $student )
                <div class="col-12 col-md-3 my-3">
                    {{-- ! PASSARE I DATI AL COMPONENTE CARD
                        *Sfruttiamo gli ATTRIBUTI HTML,custom
                        nomeAttributo='{{datoDinamico dell'array}}'
                    
                    --}}
                    <x-card 
                    studentName="{{$student['name']}}"  
                    studentSurname="{{$student['surname']}}"
                    studentId="{{$student['id']}}">
                </x-card>
                </div>
            @endforeach
        </div>
    </div>
    

</x-layout>