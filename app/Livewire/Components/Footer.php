<?php

namespace App\Livewire\Components;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Entreprise;
use App\Models\Social;
use App\Models\LegalInformation;
class Footer extends Component
{
    public function render()
    {
         Carbon::setLocale('fr');
           $entreprise=Entreprise::first();
           $legalInformation=LegalInformation::first();
            $socials=Social::orderBy('created_at','ASC')
        ->where('status',true)
        ->get();
        return view('livewire.components.footer',[
            'entreprise'=>$entreprise,
            'legalInformation'=>$legalInformation,
            'socials'=>$socials
        ]);
    }
}
