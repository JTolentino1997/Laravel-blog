<x-layout.main>
    <x-slot:header>HEADER</x-slot:header>

    <div class="container-fluid">
        <h1 class="text-center"> SHOW ME AUTH </h1>

        {{ auth()->user()->name }}
    </div>

    {{-- <x-form.button label="show Auth User">// --}}
        <a href="{{ route('users.showAuthUser')}}" class="btn btn-danger">show me</a>

    <x-slot:footer>FOOTER</x-slot:footer>
</x-layout.main>