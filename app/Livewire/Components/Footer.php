<?php

namespace App\Livewire\Components;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Entreprise;
use App\Models\Social;
class Footer extends Component
{
    public function render()
    {
         Carbon::setLocale('fr');
           $entreprise=Entreprise::first();
            $socials=Social::orderBy('created_at','ASC')
        ->where('status',true)
        ->get();
        return view('livewire.components.footer',[
            'entreprise'=>$entreprise,
            'socials'=>$socials
        ]);
    }
}
