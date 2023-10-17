<x-layout>

    <x-slot name='title'>Edit Account | O-Camp</x-slot>

    <x-slot name='content'>

        <x-dashboard-nav/>

        <h1>Edit Account</h1>

        <form action="/edit-account" method="post">

            @csrf
        
            <label for="username">username</label>

            <input type="text" name="username" id="username" value="{{ $user->username }}" required>

            <br><br>

            @error('username')
                <p>{{ $message }}</p>
            @enderror
        
            <label for="phone_number">Phone number</label>

            <input type="tel" name="phone_number" id="phone_number" value="{{ $user->phone_number }}">

            <br><br>

            @error('phone_number')
                <p>{{ $message }}</p>
            @enderror
        
            <label for="email">E-mail</label>

            <input type="email" name="email" id="email" value="{{ $user->email }}" required>

            <br><br>

            @error('email')
                <p>{{ $message }}</p>
            @enderror
        
            <label for="bio">Bio</label>

            <input type="text" name="bio" id="bio" value="{{ $user->bio }}">

            <br><br>

            @error('bio')
                <p>{{ $message }}</p>
            @enderror

            <a href="/dashboard">Discard</a>

            <button type="submit">Save changes</button>

        </form>
    
    </x-slot>

</x-layout>