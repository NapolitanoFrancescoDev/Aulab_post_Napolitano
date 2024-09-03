<x-layout>
  

    <div class="container-fluid p-0">
        <div class="row justify-content-center bg-image m-0">
            
            <div class="col-12">
                <h1 class="hidden-element display-1 text-white text-center">The Aulab Post</h1>
                <h2 class="animate-title text-white text-center fw-light">Scopri, Scrivi, Condividi.</h2>
                @if (session('message'))
                    <div class="alert alert-success text-center">
                        {{ session('message') }}
                    </div>
                @endif
    
                @if (session('alert'))
                    <div class="alert alert-danger">
                        {{ session('alert') }}
                    </div>
                @endif
    
            </div>
        </div>
    </div>
    
    
    
    <div class="container my-5">
        <div class="row justify-content-evenly">

            @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-article-card :article="$article"/>

                </div>
            @endforeach

        </div>

    </div>
</x-layout>
