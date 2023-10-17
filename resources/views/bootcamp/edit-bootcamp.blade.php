<x-layout>

    <x-slot name='title'>Edit Bootcamp Details | O-Camp</x-slot>

    <x-slot name='content'>

        <h1>Edit Bootcamp Details</h1>

        <x-admin-dashboard-nav/>

        <h1>{{ $bootcamp->name }}</h1>

        <form action="/admin/manage-bootcamp/{{ $bootcamp->slug }}" method="post">

            @csrf
        
            <label for="name">Name</label>

            <input type="text" name="name" id="name" value="{{ $bootcamp->name }}" required>

            <br><br>

            @error('text')
                <p>{{ $message }}</p>
            @enderror
        
            <label for="description">Description</label>

            <input type="text" name="description" id="description" value="{{ $bootcamp->description }}" required>

            <br><br>

            @error('description')
                <p>{{ $message }}</p>
            @enderror
        
            <label for="fee">Fee (Rp)</label>

            <input type="number" name="fee" id="fee" value="{{ $bootcamp->fee }}" required>

            <br><br>

            @error('fee')
                <p>{{ $message }}</p>
            @enderror
        
            <label for="picture_path">Display picture filepath</label>

            <input type="text" name="picture_path" id="picture_path" value="{{ $bootcamp->picture_path }}" required>

            <br><br>

            @error('fee')
                <p>{{ $message }}</p>
            @enderror
            
            <button type="submit">Save changes</button>

        </form>

        <div><h3>Rating</h3></div>

        <div>{{ $bootcamp->rating }} stars, rated {{ $bootcamp->times_rated }} times.</div>
    
    </x-slot>

</x-layout>