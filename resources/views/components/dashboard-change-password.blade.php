

<div id="popup-success" class="back-hitam">

    <div class="kotak">
        
        <div>

            <h1 class="align-center">Update your password</h1>

            <p class="align-center">Enter your current password and new password</p>

            <form action="/change-password" method="post">

                @csrf

                <div class="input-form">
                    <label class="anak-judul" for="current_password">Current Password</label><br>
                    <input class="input-form2" type="password" id="nama-nindya" name="current_password" value="" required><br>

                    @error('current_password')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="input-form">
                    <label class="anak-judul" for="new_password">New Password</label><br>
                    <input class="input-form2" type="password" id="nama-nindya" name="new_password" value=""><br>

                    @error('password')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="input-form">
                    <label class="anak-judul" for="confirm_password">Confirm New Password</label><br>
                    <input class="input-form2" type="password" id="nama-nindya" name="confirm_password" value="" required><br>

                    @error('confirm_password')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex-between deret-bawah">
                    <a href="dashboard" style="text-decoration: none;"><div class ="tombol-popup red">Cancel</div></a> 

                    <button type="submit" class ="tombol-popup blue">Change</button>

                    {{-- <a href="#" style="text-decoration: none;"><div class ="tombol-popup blue">Change</div></a>  --}}
                </div>

            </form>

        </div>
    </div>
</div>