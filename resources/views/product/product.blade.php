<x-layout>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            @foreach ($products as $product)
                <div class="col-md-4 col-sm-6 mb-3 d-flex justify-content-center">
                    <x-card :product='$product' />
                </div>
            @endforeach
        </div>
    </div>
    

</x-layout>