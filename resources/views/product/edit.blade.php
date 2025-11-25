<x-layout>
    <div class="container-fluid vh-100">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center my-3">Modifica Prodotto</h1>
            </div>
        </div>

        <x-display-error/>

        <div class="row d-flex justify-content-center align-items-center mt-3">
            <div class="col-12 w-50 bg-secondary p-3 text-white">
                <form method="POST" action="{{route('product.update', $product) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 ">
                        <label for="input" class="form-label">Inserisci il nome</label>
                        <input type="text" value="{{ old('name', $product->name) }}" class="form-control" id="input" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Inserisci Il tipo</label>
                        <input type="text" class="form-control" value="{{ old('type', $product->type) }}" id="type" name="type">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Inserisci Il prezzo</label>
                        <input type="number" step="0.01" class="form-control" id="price" value="{{ old('price', $product->price) }}" name="price">
                    </div>
                    <div class=" mt-3 mb-3">
                        <label for="description" class="form-label">Inserisci una descrizione</label>
                        <textarea class="form-control" id="description" name="description">{{old('description', $product->description)}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci l'immagine</label>
                        <input type="file" class="form-control" id="img" name="img">
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-success">Modifica prodotto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>