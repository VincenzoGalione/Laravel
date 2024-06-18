<x-layout>

    <div class="container-fluid">
        <div class="row height-custom justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center display-4 title">
                    Ciao
                </h1>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>  
                @endif
            </div>
        </div>
    </div>

</x-layout>