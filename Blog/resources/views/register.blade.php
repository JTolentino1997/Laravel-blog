<x-layout.main>
    <x-slot:header><h1>REGISTER</h1></x-slot:header>
    <h1>{{ $data ?? null }}</h1>
    <div class="container">
        <form action="{{ route('users.register') }}" method="POST">

            @csrf

            <x-form.quote/>
            
            <x-form.input label="Name" name="name" type="text"/>
            
            <x-form.input label="Email" name="email" type="text"/>
            
            <x-form.input label="password" name="password" type="password"/>
            
            <x-form.input label="Confirm Password" name="password_confirmation" type="password"/>
            
            <br>
            <x-form.button label="Submit"/>
             
          </form>
 
    </div>

    <x-slot:footer><h1>Im Footer</h1></x-slot:footer>   
</x-layout.main>