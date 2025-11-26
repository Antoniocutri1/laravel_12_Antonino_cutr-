<x-layout>

    <div class="container-fluid bg-primary">
            @if (session('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        <div class="row d-flex justify-content-center align-items-center vh-100">
            <div class="col-12">
                <h1 class="text-center text-white">HOMEPAGE</h1>
            </div>
        </div>
    </div>
</x-layout>