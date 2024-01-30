<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function render()
    {
        if(!Auth::check()){
            return redirect('login');
        }else{
            return view('livewire.beranda');
        }
    }
}
