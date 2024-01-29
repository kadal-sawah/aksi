<div class="splash-container">
    <div class="splash">
        <form class="pure-form" wire:submit="save">
            <fieldset>
            <legend>Silahkan masuk</legend>
            <input type="text" placeholder="Npp" wire:model="npp">
            <div>
                @error('npp') <span class="button-error pure-button">{{ $message }}</span> @enderror 
            </div>
        
            <input type="password" placeholder="Password" wire:model="password">
            <div>
                @error('password') <span class="button-error pure-button">{{ $message }}</span> @enderror 
            </div>
        
            <button type="submit" class="pure-button pure-button-primary">Simpan</button>
            </fieldset>
        </form>
        @if(session('failure'))
            <div class="alert alert-success">
                {{ session('failure') }}
            </div>
        @endif
    </div>

    <div class="footer l-box is-center">
        &copy;2024 RSU Pindad Medika Utama,&nbsp; <a href="https://purecss.io/">pureCss</a>&nbsp;by the Pure Team.
    </div>

</div>
