@props(['name','value'=> null])

<label for="name" class="form-label">{{ $label }} :</label>
<input type="{{ $type }}" name="{{ $name }}" class="form-control" style="@error($name) border:1px solid red @enderror">


@error($name) 
    <p style="color: red">{{ $message}}</p>
@enderror

{{-- @error('name')
<div class="text-danger">{{ $message }}</div>
 @enderror --}}