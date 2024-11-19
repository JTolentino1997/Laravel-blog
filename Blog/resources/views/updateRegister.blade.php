<x-layout.main>

    <x-slot:header>
        <h1>UPDATE REGISTER</h1>
    </x-slot:header>
 <hr>
    <div class="container">

      
  {{-- {{ auth()->user()->email }} --}}
        <form action="{{ route('users.updateRegister')}}" method="post">
            @csrf
            <x-form.input label="Name" name="name" type="text" :value="auth()->user()->name"/>

            <x-form.input label="Email" name="email" type="email" :value="auth()->user()->email"/>

             <x-form.input label="Current Password" name="current_password" type="password"/>
             
             <x-form.input label="Password" name="password" type="password"/>

             <x-form.input label="Confirm Password" type="password" name="password_confirmation"/>
            
             <br>
            
             <x-form.button label="UPDATE" />
             
        </form>
    </div>

    <hr>
    <x-slot:footer>
        <h1>Footer</h1>
    </x-slot:footer>
  
    <x-slot:footer>FOOTER</x-slot:footer>

</x-layout.main>