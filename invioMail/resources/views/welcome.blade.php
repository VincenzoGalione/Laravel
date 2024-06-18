<x-layout>

    <div class="container-fluid">
        <div class="row  height-custom  align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-4 title">
                    CIAO
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