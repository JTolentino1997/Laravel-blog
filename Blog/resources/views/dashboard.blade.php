<x-layout.main>
    <x-slot:header>HEADER</x-slot:header>

    <div class="container-fluid">
        <h1 class="text-center"> WELCOME DASHBOARD </h1>

        {{ auth()->user()->email }}
    </div>

    {{-- <x-form.button label="show Auth User">// --}}
        <a href="{{ route('users.showAuthUser')}}" class="btn btn-danger">show me</a>
        <a href="{{ route('users.redirect-updateRegister')}}" class="btn btn-danger">update me</a>
        <a href="{{ route('users.redirect-redirectWorkExperience')}}" class="btn btn-danger">Experience</a>
        <a href="{{ route('users.logout')}}" class="btn btn-danger">logout me</a>
        <a href="{{ route('users.showEmployees')}}" class="btn btn-danger">Show Employees</a>
        
    <x-slot:footer>FOOTER</x-slot:footer>


</x-layout.main>