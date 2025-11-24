<x-layout>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="container-fluid bg-primary">
        <div class="row d-flex justify-content-center align-items-center vh-100">
            <div class="col-12">
                <h1 class="text-center text-white">HOMEPAGE</h1>
            </div>
        </div>
    </div>
</x-layout>