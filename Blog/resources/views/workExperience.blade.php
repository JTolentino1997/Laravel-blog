<x-layout.main>

    <x-slot:header>Work Experience</x-slot:header>

    <div class="container">
        <form action="{{ route('users.workExperience')}}" method="POST" class="form-control">
            @csrf
            
            <x-form.input label="Company" type="text" name="company"/>
            <x-form.input label="Date Start" type="date" name="dateStart"/>
            <x-form.input label="Date End" type="date" name="dateEnd"/>
            <x-form.input label="Role" type="text" name="role"/>

            <br>
            <x-form.button label="Submit"/>
     
        </form>
    </div>

    <x-slot:footer>
        FOOTER
    </x-slot:footer>
</x-layout.main>