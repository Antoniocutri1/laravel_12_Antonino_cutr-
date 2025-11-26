<div class="card mt-5 mx-2" style="width: 18rem;">
    @if ($product->img)
        <img src="{{Storage::url($product->img)}}" class="card-img-top" alt="immagine">
    @else 
        <img src="https://picsum.photos/200/300" class="card-img-top" alt="immagine">
    @endif
    <div class="card-body">
        <h3 class="card-title">{{$product->name}}</h3>
        <h5 class="card-subtitle"> {{$product->type}}</h5>
        <p class="card-text my-3">Creato da {{ $product->user->name }}</p>
        <div class="d-flex justify-content-between mt-2">
            <a href="{{route('product.show', $product)}}" class="btn btn-primary">Vedi di più</a>

            @auth
                @if(Auth::id() == $product->user->id )
                    <a href="{{route('product.edit', $product)}}" type="submit" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>

                    <form action="{{route('product.destroy', $product) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                @endif
            @endauth
        </div>
    </div>
</div>