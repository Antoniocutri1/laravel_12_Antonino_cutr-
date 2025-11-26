<x-layout>

    <div class="container">
        <h1 class="text-center my-3">Profilo di {{Auth::user()->name}}</h1>
        <div class="row d-flex align-items-center justify-content-center">
            @forelse (Auth::user()->products as $product)
                <div class="col-md-4 col-sm-6 mb-3 d-flex justify-content-center">
                    <x-card :product='$product' />
                </div>
            @empty
                <h3 class="text-center ">Non hai ancora creato nessun prodotto</h3>

                <a class="btn btn-outline-warning rounded-4 w-25 mt-5" href="{{route('product.form')}}">Crea prodotto</a>


            @endforelse
        </div>
    </div>
    

</x-layout>