<?php

namespace App\Livewire\Pic;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\MasterPic;

class Pic extends Component
{
    
    #[Validate('required', message:'level pic diperlukan', translate:false)]
    #[Validate('min:1', message:'minimal level pic 1', translate:false)]
    #[Validate('max:6', message:'maksimal level pic 6', translate:false)]
    public $level_pic = '';
    
    #[Validate('required', message:'mohon isi keterangan pic',translate:false)]
    #[Validate('min:3', message:'keterangan kurang dari 3', translate:false)]
    public $nama_pic = '';

    public function save()
    {
        try { 
            $this->validate();
            $picExists = MasterPic::where('nama_pic', $this->nama_pic)->exists();
            if($picExists){
                session()->flash('failure', 'nama level pic sudah ada');
            }else{
                $pic = MasterPic::create(
                    $this->only([
                        'nama_pic',
                        'level_pic'])
                );
    
                if($pic == true){
                    session()->flash('success', 'nama level pic berhasil di buat');
                    $this->reset();
                }else{
                    session()->flash('failure', 'terjadi kesalahan');
                }
            }
            
        } catch (\Illuminate\Database\QueryException $exception) {
            // $errorInfo = $exception->errorInfo;
            $errorInfo = $exception->getMessage();
            return $errorInfo;;
        }
    }

    public function render()
    {
        return view('livewire.pic.pic');
    }
}
