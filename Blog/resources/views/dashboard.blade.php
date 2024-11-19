<x-layout.main>
    <x-slot:header>HEADER</x-slot:header>

    <div class="container-fluid">
        <h1 class="text-center"> WELCOME DASHBOARD </h1>

        {{ auth()->user()->email }}
    </div>

    {{-- <x-form.button label="show Auth User">// --}}
        <a href="{{ route('users.showAuthUser')}}" class="btn btn-danger">show me</a>
        <a href="{{ route('users.redirect-updateRegister')}}" class="btn btn-danger">update me</a>
        <a href="{{ route('users.logout')}}" class="btn btn-danger">logout me</a>

    <x-slot:footer>FOOTER</x-slot:footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</x-layout.main>