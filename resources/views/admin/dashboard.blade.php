<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-center bg-image">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 animate-title">Bentornato, Amministratore {{ Auth::user()->name }}</h1>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="text-center alert alert-success">
            {{ session('message') }}

        </div>
    @endif
    @if(session('success'))
    <div class="text-center alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="text-center alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    <div class="container my-5 hidden-element">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per il ruolo di amministratore</h2>

                <x-request-table :roleRequests="$adminRequests" role="amministratore" />

            </div>

        </div>

    </div>
    
    <div class="container my-5 hidden-element">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per il ruolo di revisore</h2>
                <x-request-table :roleRequests="$revisorRequests" role="revisore" />


            </div>

        </div>

    </div>
    <div class="container my-5 hidden-element">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per il ruolo di redattore</h2>
                <x-request-table :roleRequests="$writerRequests" role="redattore" />


            </div>

        </div>

    </div>
    <hr>
    <div class="container my-5 hidden-element">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Tutti i tags</h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags"/>

            </div>

        </div>

    

    </div>
    <div class="container my-5 hidden-element">
        <h2>Tutte le categorie</h2>
        <form action="{{route('admin.storeCategory')}}" method="POST" class="w-50 d-flex m-3 hidden-element">
            @csrf
            <input type="text" name="name" class="form-control me-2" placeholder="Inserisci una nuova categoria">
            <button type="submit" class="btn btn-outline-secondary">Inserisci</button>
        </form>

    </div>
    <x-metainfo-table :metaInfos="$categories" metaType="categorie"/>
</x-layout>
