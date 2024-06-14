<x-layout>

    <div class="container-fluid text bg-background">
        <div class="row h-75 justify-content-center align-items-center ">
            <div class="col-12 py-5">
                <h1 class="text-center display-4 title">
                    I nostri servizi
                </h1>
            </div>
        </div>
        <div class="row  justify-content-center align-items-center  title ">
            @foreach ($servizi as $servizio)
                <div class="col-12 col-md-3 my-3">
                    <x-card-service id="{{ $servizio['id'] }}" name="{{ $servizio['name'] }}" responsible="{{ $servizio['responsible'] }}" sector="{{ $servizio['sector'] }}">
                    </x-card-service>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
