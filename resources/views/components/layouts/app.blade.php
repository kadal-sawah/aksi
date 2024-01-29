<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" 
        integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="/css/styles.css">
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>

    <div class="header">
        <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
            <a class="pure-menu-heading" href="#">RSU Pindad</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item pure-menu-selected">
                    @if(Route::is('register'))
                    <a href="/login" class="pure-menu-link" wire:navigate>Masuk</a>
                    @endif
                    @if(Route::is('login'))
                    <a href="/register" class="pure-menu-link" wire:navigate>Registrasi</a>
                    @endif
                    @auth
                    {{auth()->user()->npp}}
                    <a href="/logout" class="pure-menu-link" wire:navigate>Keluar</a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>

        {{ $slot }}
    
        @livewireScripts
    
    </body>
</html>
