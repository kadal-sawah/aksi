<div class="splash-container">
    <div class="splash">
        <p class="splash-subhead">
            <b>A</b><small>rahan Dire</small><b>ksi</b>
        </p>
        @if(session('success'))
            <div class="button-xsmall button-success pure-button">
                {{ session('success') }}
            </div>
        @endif
        @if(session('failure'))
            <div class="button-xsmall button-error pure-button">
                {{ session('failure') }}
            </div>
        @endif
        
        <form class="pure-form" wire:submit="login">
        <fieldset>
            <legend>Silahkan masuk</legend>
            <input type="text" placeholder="masukan npp" wire:model="npp">
            @error('npp') <p class="button-xsmall button-error pure-button">{{ $message }}</p> @enderror 
        
            <input type="password" placeholder="masukan password" wire:model="password">
            @error('password') <p class="button-xsmall button-error pure-button">{{ $message }}</p> @enderror 
        
            <button type="submit" class="pure-button pure-button-primary">masuk</button>
        </fieldset>
        </form>
    </div>

    <div class="footer l-box is-center">
        &copy;2024 RSU Pindad Medika Utama,&nbsp; <a href="https://purecss.io/">pureCss</a>&nbsp;by the Pure Team.
    </div>

</div>
