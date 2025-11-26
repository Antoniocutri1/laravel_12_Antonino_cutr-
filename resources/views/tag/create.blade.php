<x-layout>

    <x-display-error/>
    
    <div class="container-fluid movies">
        <div class="row justify-content-center align-items-center">
            <div class="row">
                <h1 class="text-center mt-5">Inserisci un nuovo tag</h1>
            </div>
            <div class="col-12 col-md-8 mt-5 bg-secondary p-5 rounded-4">
                <form method="POST" action="{{ route('tag.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="genre" class="form-label text-white fs-4">Inserisci il tag</label>
                        <input type="text" name="name" class="form-control" id="name"
                        value="{{ old('name') }}">

                    </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-success w-50 rounded-pill"> Inserisci</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>