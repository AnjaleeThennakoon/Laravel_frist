@props(['name' => 'required'])

@error($name)
    <p class="text-error text-sm mt-1">{{ $message }}</p>
@enderror