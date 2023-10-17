<x-layout>

    <x-slot name='title'>Change Password | O-Camp</x-slot>

    <x-slot name='content'>

        <x-dashboard-nav/>

        <h1>Change Password</h1>

        <form action="/change-password" method="post">

            @csrf
        
            <label for="current_password">CURRENT PASSWORD</label>

            <input type="password" name="current_password" id="current_password" value="" required>

            <br><br>

            @error('current_password')
                <p>{{ $message }}</p>
            @enderror
        
            <label for="new_password">NEW PASSWORD</label>

            <input type="password" name="new_password" id="new_password" value="">

            <br><br>

            @error('password')
                <p>{{ $message }}</p>
            @enderror
        
            <label for="confirm_password">CONFIRM NEW PASSWORD</label>

            <input type="password" name="confirm_password" id="confirm_password" value="" required>

            <br><br>

            @error('confirm_password')
                <p>{{ $message }}</p>
            @enderror

            <a href="/dashboard">Discard</a>

            <button type="submit">Save changes</button>

        </form>
    
    </x-slot>

</x-layout>