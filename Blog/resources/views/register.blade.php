<x-layout.main>
    <x-slot:header><h1>REGISTER</h1></x-slot:header>

    <div class="container">
        <form action="{{ route('users.register') }}" method="POST">

            @csrf

            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
            @error('name')
            <div class="text-danger">{{ $message }}</div>
             @enderror

            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" >
            @error('email')
            <div class="text-danger">{{ $message }}</div>
             @enderror

            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
            @error('password')
            <div class="text-danger">{{ $message }}</div>
             @enderror

            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control">
            @error('password_confirmation')
            <div class="text-danger">{{ $message }}</div>
             @enderror

            <br>
            <button type="submit" class="btn btn-primary">Submit</button>

          </form>

{{--          
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif --}}
    </div>

    <x-slot:footer><h1>Im Footer</h1></x-slot:footer>   
</x-layout.main>