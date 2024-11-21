<x-layout.main>

    <x-slot:header>
      <div class="container text-center">
        <h1 class="text-primary">Work Experience</h1>
      </div>
    </x-slot:header>
<hr>
    <div class="container">
        <form action="{{ route('users.workExperience')}} " method="POST" class="form-control">
            @csrf
            
            <x-form.input label="Company" type="text" name="company"/>
            <x-form.input label="Date Start" type="date" name="start_date"/>
            <x-form.input label="Date End" type="date" name="end_date"/>
            <x-form.input label="Role" type="text" name="role"/>

            <br>
            <x-form.button label="Submit"/>
        </form>
 
        <table class="table">
            <tr>
                <th>#</th>
                <th>Company</th>
                <th>Date Start</th>
                <th>Date End</th>
                <th>Role</th>
            </tr>
            @foreach($workExperiences as $index => $workExperience)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $workExperience->company }}</td>
                    <td>{{ $workExperience->start_date }}</td>
                    <td>{{ $workExperience->end_date ?? 'null' }}</td>
                    <td>{{ $workExperience->role }}</td>
                    <td>
                        <form action="{{route ('delete-employee', $workExperience->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?');">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
<hr>
    <x-slot:footer>
        <div class="container text-center">
            <h1 class="text-primary">FOOTER</h1>
          </div>
    </x-slot:footer>
</x-layout.main>


