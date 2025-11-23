<x-layout>

    <x-navbar/>

    <div class="container-fluid img-bg vh-100">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center text-white mt-5">CONTATTACI</h1>
            </div>
        </div>

        <div class="row d-flex justify-content-center align-items-center mt-3">
            <div class="col-12 w-50 bg-secondary p-3">
                <form method="POST" action="">
                    <div class="mb-3 ">
                        <label for="input" class="form-label">Inserisci il nome</label>
                        <input type="text" class="form-control" id="input" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="e-mail" class="form-label">Inserisci email</label>
                        <input type="email" class="form-control" id="e-mail" name="e-mail">
                    </div>
                    <div class=" mt-3 mb-3">
                        <label for="description" class="form-label">Inserisci una desrizione</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-success">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-layout>