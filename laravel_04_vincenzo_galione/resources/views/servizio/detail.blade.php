<x-layout>
   
    <div class="container-fluid vh-100 text-light bg-background ">
        <div class="row  justify-content-center align-items-center">
            <div class="col-12 py-5">
                <h1 class="text-center display-4 ">
                    I servizi: {{ $service["name"] }}  {{ $service['sector'] }}
                </h1>
            </div>
        </div>
        <div class="row  justify-content-center align-items-center  ">
            <div class="col-12 col-md-6">
                <img src="https://picsum.photos/400" alt="immagine casuale">
            </div>
            <div class="col-12 col-md-6">
                <h2>{{ $service['name']}} {{ $service['responsible']}}</h2>
                <h2>{{ $service['sector']}}</h2>

                

            </div>
        </div>
    </div>

</x-layout>
