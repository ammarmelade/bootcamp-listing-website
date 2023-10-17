<x-layout>

    <x-slot name='title'>Create Bootcamp | O-Camp</x-slot>

    <x-slot name='content'>
        
        <h1>Create a bootcamp</h1>

        <form action="/create-bootcamp" method="post">

            @csrf
        
            <label for="name">Bootcamp name</label>

            <input type="text" name="name" id="name" value="{{ old('name') }}" required>

            <br><br>

            @error('name')
                <p>{{ $message }}</p>
            @enderror
        
            <label for="description">Bootcamp description</label>

            <input type="text" name="description" id="description" value="{{ old('description') }}" required>

            <br><br>

            @error('description')
                <p>{{ $message }}</p>
            @enderror
        
            <label for="link">Bootcamp link</label>

            <input type="text" name="link" id="link" value="{{ old('link') }}" required>

            <br><br>

            @error('link')
                <p>{{ $message }}</p>
            @enderror
    
            <label for="phone_number">Phone number</label>
    
            <input type="tel" name="phone_number" id="phone_number" value="{{ old('phone_number') }}">
    
            <br><br>
    
            @error('phone_number')
                <p>{{ $message }}</p>
            @enderror
    
            <label for="fee">Course fee</label>

            <input type="number" name="fee" id="fee" value="{{ old('fee') }}">
    
            <br><br>
    
            @error('fee')
                <p>{{ $message }}</p>
            @enderror
    
            <label for="email">E-mail</label>
    
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
    
            <br><br>
    
            @error('email')
                <p>{{ $message }}</p>
            @enderror

            <button type="submit">Create</button>

        </form>

    </x-slot>

</x-layout>