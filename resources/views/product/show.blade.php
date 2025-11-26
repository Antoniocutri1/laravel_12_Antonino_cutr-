<x-layout>

    <x-status/>

    <div class="container my-5">
        <div class="card shadow-lg mx-auto" style="max-width: 600px;">
            <img src="{{ Storage::url($product->img) }}" class="card-img-top" alt="{{ $product->name }}">
            <div class="card-body">
                <h3 class="card-title">{{ $product->name }}</h3>
                <h5 class="card-subtitle text-muted mb-3">{{ $product->type }}</h5>
                
                <p class="card-text">{{ $product->description }}</p>

                <h4 class="text-primary mb-3">Prezzo: € {{ number_format($product->price, 2) }}</h4>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('products') }}" class="btn btn-outline-secondary rounded-pill">
                        <i class="bi bi-arrow-left"></i> Torna ai prodotti
                    </a>
                </div>
            </div>
        </div>
    </div>

</x-layout>