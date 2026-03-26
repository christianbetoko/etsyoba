<?php

namespace App\Livewire;
use Livewire\Attributes\Title;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Stat;
use App\Models\Slide;
#[Title('Accueil - Ets Yoba - Ma Bannière')]
class Home extends Component
{
    public function render()
    {
         Carbon::setLocale('fr');
        $stats = Stat::where('is_active', true)->get();
         $slides=Slide::orderBy('created_at','ASC')
        ->where('is_active',true)
        ->get();
        return view('livewire.home', compact('stats', 'slides'));
    }
}
