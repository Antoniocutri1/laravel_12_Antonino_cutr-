<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 my-5">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo e-mail</label>
                        <input type="email" class="form-control" id="email" name="email" >
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label"> Conferma Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-3 w-25">Accedi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>