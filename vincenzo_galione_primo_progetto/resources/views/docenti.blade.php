<x-layout>

    <div class="container-fluid  bg-background">
        <div class="row h-75 justify-content-center align-items-center ">
            <div class="col-12 py-5">
                <h1 class="text-center diplay-4 title">
                    I nostri docenti
                </h1>
            </div>
        </div>
        <div class="row  justify-content-center align-items-center  title ">
            @foreach ($teachers as $teacher )
                <div class="col-12 col-md-3 my-3">
                    
                    {{-- ! NON LASCIARE SPAZI TRA NOME ATTRIBUTO, = E CONTENUTO DELL'ATTRIBUTO --}}
                    <x-card-teacher
                        name="{{$teacher['name']}}"  
                        surname="{{$teacher['surname']}}"
                        subject="{{$teacher['subject']}}">
                    </x-card-teacher>
                </div>
            @endforeach
        </div>
    </div>
    
</x-layout>