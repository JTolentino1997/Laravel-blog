<x-layout.main>
    <x-slot:header>HEADER</x-slot:header>

    <div class="container-fluid">
        <h1 class="text-center"> WELCOME DASHBOARD </h1>

        {{ auth()->user()->email }}
    </div>

    <x-slot:footer>FOOTER</x-slot:footer>
</x-layout.main>