<x-layout.main>

<x-slot:header><h1>header</h1></x-slot:header>
    <div class="container">
        <form action="{{ route('users.login')}}" method="POST">
           @csrf

           <h1>Login</h1>
           <x-form.input label="Username" name="email" type="text"/>
           <x-form.input label="Password" name="password" type="password"/>
           <br>
           <x-form.button label="Submit"/>
        </form>
    </div>

    <x-slot:footer>
        No account? <a href="{{ route('users.register') }}">Register Here</a>
    </x-slot:footer>   
    

</x-layout.main>