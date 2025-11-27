<x-layout>
    <div class="container my-5">
        <h1 class="mb-4 text-center">Prodotti per il Tag {{$tag->name}}</h1>

        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                @forelse ($tag->products as $product)
                    <div class="col-md-4 col-sm-6 mb-3 d-flex justify-content-center">
                        <x-card :product='$product' />
                    </div>
                @empty
                <p class="text-center">Non ci sono prodotti associati a questo tag</p>
                @endforeach
            </div>
        </div>


    </div>
</x-layout>